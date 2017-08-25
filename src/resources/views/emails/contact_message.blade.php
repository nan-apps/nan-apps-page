<h3>Contacto desde Nan-Apps</h3>

<p><b>Nombre: </b> {{ $contactMessage->name }} <p>
<p><b>Email: </b> {{ $contactMessage->email }} <p>
<p><b>IP: </b> {{ $contactMessage->ip }} <p>
<p><b>Fecha creacion: </b> {{ $contactMessage->created_at }} <p>

<h3>Mensaje:</h3>
<p>
	{{ $contactMessage->message }}
</p>