function validate_form ()
{
	valid = true;

        if ( document.contact_form.name.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Имя'." );
                valid = false;
        }
        if ( document.contact_form.email.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Email'." );
                valid = false;
        }
        if ( document.contact_form.message.value == "" )
        {
                alert ( "Пожалуйста заполните поле 'Сообщение'." );
                valid = false;
        }
        if ( document.contact_form.human.checked == false )
        {
                alert ( "Пожалуйста, подтвердите, что вы человек." );
                valid = false;
        }

        return valid;
}
