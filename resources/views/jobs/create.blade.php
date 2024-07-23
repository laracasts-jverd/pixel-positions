<x-layout>
  <x-page-heading>New job</x-page-heading>
  <x-forms.form method="POST" action="/jobs">

    <x-forms.input label="Title" name="title" placeholder="Laravel developer" />
    <x-forms.input label="Salary" name="salary" placeholder="$43,000" />
    <x-forms.input label="Location" name="location" placeholder="Strasbourg, France" />

    <x-forms.select label="Schedule" name="schedule">
      <option>Part-time</option>
      <option>Full-time</option>
    </x-forms.select>

    <x-forms.input label="URL" name="url" placeholder="https://laracasts.com/careers/124323"/>
    <x-forms.checkbox label="Feature (Costs extra)" name="featured" />

    <x-forms.divider />

    <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Laravel, Blade, Tailwind"/>

    <x-forms.button>Publish</x-forms.button>

  </x-forms.form>
</x-layout>
