<form
    x-data
    class="card-body"
    method="POST"
    x-init="$store.lead.unqiueToken = '{{ session()->get('unique_token') }}'"
    @submit.prevent="$store.lead.preparePayload()"
>
    @method('POST')
    @csrf

    @include('content.main.sections.section-hero.elements.input-full_name')
    @include('content.main.sections.section-hero.elements.input-phone_number')
    @include('content.main.sections.section-hero.elements.input-email')

    <x-ui::control.primary class="mt-6">
        <x-ui::button.primary
            theme="primary"
            text="Отправить"
        />
    </x-ui::control.primary>
</form>
