<x-ui::control.primary>
    <x-ui::label.primary
        text="E-Mail адрес"
        x-bind:class="{
            'text-red-400': !$store.lead.data.email.isValid && $store.lead.data.email.error !== '',
            'text-emerald-500': $store.lead.data.email.isValid && $store.lead.data.email.error === '',
        }"
    />

    <x-ui::input.text.primary
        type="email"
        id="email"
        name="email"
        placeholder="Введите ваш E-Mail"
        x-model="$store.lead.data.email.value"
        x-on:change="$store.lead.data.email.check()"
        x-bind:class="{
            'input-error': !$store.lead.data.email.isValid && $store.lead.data.email.error !== '',
            'input-success': $store.lead.data.email.isValid && $store.lead.data.email.error === '',
        }"
    />

    <x-ui::input-error.primary
        x-bind:class="{ '--active': !$store.lead.data.email.isValid && $store.lead.data.email.error !== ''}"
        x-text="$store.lead.data.email.error"
    >

    </x-ui::input-error.primary>
</x-ui::control.primary>
