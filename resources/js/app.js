import './bootstrap';
import Alpine from 'alpinejs'

window.Alpine = Alpine

const APP_URL = import.meta.env.VITE_APP_URL;

Alpine.store('lead', {
        data: {
            fullName: {
                value: '',
                pattern: /^[А-Яа-яЁё]+(\s[А-Яа-яЁё]+)*$/u,
                isValid: false,
                error: '',
                check: function () {
                    if (this.value === '') {
                        this.error = 'Имя обязательно к заполнению.';
                        this.isValid = false;
                        return false;
                    } else if (!this.pattern.test(this.value)) {
                        this.error = 'Пожалуйста, введите валидное Имя.';
                        this.isValid = false;
                        return false;
                    }

                    this.error = '';
                    this.isValid = true;
                    return true;
                }
            },
            phoneNumber: {
                value: '',
                pattern: /^(\+?\d{1,3})?(\d{10})$/,
                isValid: false,
                error: '',
                check: function () {
                    if (this.value === '') {
                        this.error = 'Номере телефона обязателен к заполнению.';
                        this.isValid = false;
                        return false;
                    } else if (!this.pattern.test(this.value)) {
                        this.error = 'Пожалуйста, введите существующий номер телефона.';
                        this.isValid = false;
                        return false;
                    }

                    this.error = '';
                    this.isValid = true;
                    return true;
                }
            },
            email: {
                value: '',
                pattern: /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                isValid: false,
                error: '',
                check: function () {
                    if (this.value === '') {
                        this.error = 'E-mail адрес обязателен к заполнению.';
                        this.isValid = false;
                        return false;
                    } else if (!this.pattern.test(this.value)) {
                        this.error = 'Пожалуйста, введите существующий Email.';
                        this.isValid = false;
                        return false;
                    }

                    this.error = '';
                    this.isValid = true;
                    return true;
                }
            },
        },
        preparePayload()
        {
            const isFilledDataValid = (
                this.data.fullName.check() &&
                this.data.phoneNumber.check() &&
                this.data.email.check()
            );

            if (!isFilledDataValid)
                return false;

            const payload = {
                full_name: this.data.fullName.value,
                phone_number: this.data.phoneNumber.value,
                email: this.data.email.value,
            }

            return this.sendPayload(payload)
        },
        async sendPayload(payload)
        {
            await axios.post(APP_URL + `/lead/create`, payload)
                .catch(e => {
                    console.log(e)
                });
        }
})

Alpine.store('alert', {
    data: {
        title: '',
        text: '',
        meaning: '',
    },
    status: {
        show: false,
        hiddeble: true,
    },
    alertTimeoutId: null,

    createAlert: function (meaning, title, text, hiddeble)
    {
        this.alertTimeoutId = null

        this.data.meaning = meaning;
        this.data.title = title;
        this.data.text = text;

        this.status.hiddeble = hiddeble;
        this.status.show = true;

        if (this.alertTimeoutId) {
            clearTimeout(this.alertTimeoutId);
            this.alertTimeoutId = null;
        }

        if (this.status.hiddeble) {
            this.alertTimeoutId = setTimeout(() => {
                this.status.show = false;
                this.alertTimeoutId = null;
            }, 2000)
        }
    },
    removeAlert() {
        if (this.alertTimeoutId) {
            clearTimeout(this.alertTimeoutId);
            this.alertTimeoutId = null;
        }
        this.status.show = false;
    }

})

Alpine.start()

