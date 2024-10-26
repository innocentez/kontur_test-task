<x-ui::control.primary>
    <x-ui::label.primary
        text="Номер телефона"
        x-bind:class="{
                'text-red-400': !$store.lead.data.phoneNumber.isValid && $store.lead.data.phoneNumber.error !== '',
                'text-emerald-500': $store.lead.data.phoneNumber.isValid && $store.lead.data.phoneNumber.error === '',
            }"
    />

    <x-ui::input.text.primary
        type="text"
        id="phone_number"
        name="phone_number"
        placeholder="Введите ваш контактный номер"
        x-model="$store.lead.data.phoneNumber.value"
        x-on:change="$store.lead.data.phoneNumber.check()"
        x-bind:class="{
                'input-error': !$store.lead.data.phoneNumber.isValid && $store.lead.data.phoneNumber.error !== '',
                'input-success': $store.lead.data.phoneNumber.isValid && $store.lead.data.phoneNumber.error === '',
            }"
    />

    <x-ui::input-error.primary
        x-bind:class="{ '--active': !$store.lead.data.phoneNumber.isValid && $store.lead.data.phoneNumber.error !== ''}"
        x-text="$store.lead.data.phoneNumber.error"
    ></x-ui::input-error.primary>
</x-ui::control.primary>
