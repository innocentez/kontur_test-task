<x-ui::control.primary>
    <x-ui::label.primary
        text="Ваше имя"
        x-bind:class="{
            'text-red-600': !$store.lead.data.fullName.isValid && $store.lead.data.fullName.error !== '',
            'text-emerald-500': $store.lead.data.fullName.isValid && $store.lead.data.fullName.error === '',
        }"
    />

    <x-ui::input.text.primary
        type="text"
        id="full_name"
        name="full_name"
        placeholder="Введите ваше имя"
        x-model="$store.lead.data.fullName.value"
        x-on:change="$store.lead.data.fullName.check()"
        x-bind:class="{
            'input-error': !$store.lead.data.fullName.isValid && $store.lead.data.fullName.error !== '',
            'input-success': $store.lead.data.fullName.isValid && $store.lead.data.fullName.error === '',
        }"

    />

    <x-ui::input-error.primary
        x-bind:class="{ '--active': !$store.lead.data.fullName.isValid && $store.lead.data.fullName.error !== ''}"
        x-text="$store.lead.data.fullName.error"
    ></x-ui::input-error.primary>
</x-ui::control.primary>
