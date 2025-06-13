<x-dashbord.layout.app>

    <!-- Stats cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

        <x-dashbord.card.total-show :count="$service" title="Services">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                </path>
            </svg>
        </x-dashbord.card.total-show>

        <x-dashbord.card.total-show :count="$product" color="text-primary" title="Products">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                </path>
            </svg>
        </x-dashbord.card.total-show>

        <x-dashbord.card.total-show :count="$webinar" color="text-info" title="Webinar">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-8 h-8 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                </path>
            </svg>
        </x-dashbord.card.total-show>


    </div>




    <x-dashbord.form.container title="Genaral info">
        <x-dashbord.form.form methpd="POST" action="{{ route('control.settings.update') }}">

            <x-dashbord.form.input
            label="Contact Email"
            name="contact_email"
            placeholder="Contact Adress"
            :value="$settings['contact_email']->value ?? '{}'"
            />

            <x-dashbord.form.input
            label="Contact Phone"
            name="contact_phone"
            placeholder="Contact Adress"
            :value="$settings['contact_phone']->value ?? '{}'"
            />
            

            <x-dashbord.form.multilang-Input 
            name="contact_address"
            label="Address" 
            :placeholders="['en' => 'Contact Adress', 'ku' => ' ناونیشان']"
           
            :values="is_string($settings['contact_address']->value) 
    ? json_decode($settings['contact_address']->value, true) 
    : (is_array($settings['contact_address']->value) 
        ? $settings['contact_address']->value 
        : [])"
            />


     
            <x-dashbord.form.input
            label="Map Link"
            name="contact_link"
            placeholder="https://www.google.com/maps"
            :value="$settings['contact_link']->value ?? '{}'"
            
            />

        <div role="alert" class="alert alert-warning">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6 shrink-0 stroke-current">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
  </svg>
  <span>Link should be iframe link on google map</span>
</div>
              <x-dashbord.form.input
            label="Facebook"
            name="social_fac"
            placeholder="https://www.facebook.com/"
            :value="$settings['social_fac']->value ?? '{}'"
          
            />

            
              <x-dashbord.form.input
            label="LinkedIn"
            name="social_lin"
            placeholder="https://linkedin.com/"
            :value="$settings['social_lin']->value ?? '{}'"
            
            />


            <x-dashbord.form.button type="submit" class="btn-primary ">
                Save
            </x-dashbord.form.button>
        </x-dashbord.form.form>
    </x-dashbord.form.container>

</x-dashbord.layout.app>
