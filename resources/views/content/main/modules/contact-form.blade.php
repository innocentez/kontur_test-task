<form
    x-data
    class="card-body"
    method="POST"
    x-init="$store.lead.unqiueToken = '{{ session()->get('unique_token') }}'"
    @submit.prevent="$store.lead.preparePayload()"
>
    @method('POST')
    @csrf

    <x-ui::control.primary>
        <x-ui::label.primary text="Ваше имя" />

        <x-ui::input.text.primary
            type="text"
            id="full_name"
            name="full_name"
            placeholder="Введите ваше имя"
            x-model="$store.lead.data.fullName.value"
            x-on:change="$store.lead.data.fullName.check()"
            x-bind:class="{ 'input-error': !$store.lead.data.fullName.isValid && $store.lead.data.fullName.error !== ''}"
        />

        <x-ui::input-error.primary
            x-bind:class="{ '--active': !$store.lead.data.fullName.isValid && $store.lead.data.fullName.error !== ''}"
            x-text="$store.lead.data.fullName.error"
        ></x-ui::input-error.primary>
    </x-ui::control.primary>

    <x-ui::control.primary class="mt-6">
        <x-ui::button.primary
            theme="primary"
            text="Отправить"
        />
    </x-ui::control.primary>
</form>


<!--
    <x-ui::control.primary>
        <x-ui::label.primary text="Номер телефона" />

        <x-ui::input.text.primary
            type="text"
            id="phone_number"
            name="phone_number"
            placeholder="Введите ваш контактный номер"
            x-model="phoneNumber.value"
            x-on:change="phoneNumber.check()"
        />

        <x-ui::input-error.primary
            x-bind:class="{ '--active': !phoneNumber.isValid && phoneNumber.error !== ''}"
            x-text="phoneNumber.error"
        ></x-ui::input-error.primary>
    </x-ui::control.primary>

        <x-ui::control.primary>
        <x-ui::label.primary text="Email" />

        <x-ui::input.text.primary
            type="email"
            id="email"
            name="email"
            placeholder="Введите ваш Email"
        />

        <x-ui::input-error.primary
            x-bind:class="{ '--active': !fullName.isValid && fullName.error !== ''}"
            x-text="fullName.error"
        ></x-ui::input-error.primary>
    </x-ui::control.primary>
-->
