$(document).ready(function() {
    $('#form').validate({
        rules: {
            InputImie: 'required',
            InputNazwisko: 'required',
            InputDate: 'required',
            InputEmail: {
                required: true,
                email: true
            },
            InputNumerTelefonu: {
                required: true,
                digits: true
            },
            InputWojewodztwo: 'required',
            Plec: 'required',
        },
        messages: {
            InputImie: 'Proszę podać imię',
            InputNazwisko: 'Proszę podać nazwisko',
            InputDate: 'Proszę podać datę urodzenia',
            InputEmail: {
                required: 'Proszę podać adres email',
                email: 'Proszę podać poprawny adres email'
            },
            InputNumerTelefonu: {
                required: 'Proszę podać numer telefonu',
                digits: 'Proszę podać poprawny numer telefonu (tylko cyfry)'
            },
            InputWojewodztwo: 'Proszę wybrać województwo',
            Plec: 'Proszę wybrać płeć'
        }
    });
});