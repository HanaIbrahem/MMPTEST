<x-dashbord.layout.app>

    <x-dashbord.form.container title="Aout Page">
        <x-dashbord.form.form methpd="POST" action="{{ route('control.about.update') }}">



            <x-dashbord.form.editor 
            name="about_page" 
            label="About Content"
            :values="old('about_page', $setting->value ?? [])" 
            :placeholders="['en' => 'Enter content', 'ku' => ' ناوەڕۆک بنوسە']" />

            
            <x-dashbord.form.button type="submit" class="btn-primary ">
                Save
            </x-dashbord.form.button>
        </x-dashbord.form.form>
    </x-dashbord.form.container>
</x-dashbord.layout.app>
