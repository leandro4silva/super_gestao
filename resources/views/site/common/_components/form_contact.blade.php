{{$slot}}
<form action="{{ route('site.contactCreate') }}" method="POST" style="text-align: left">
    @csrf
    <input name="name" value="{{old('name')}}" type="text" placeholder="Nome" class="{{$class}}">
    {{ $errors->first('name')}}
    <br>
    <input name="phone" value="{{old('phone')}}" type="text" placeholder="Telefone" class="{{$class}}">
    {{ $errors->first('phone') }}
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$class}}">
    {{ $errors->first('email') }}
    <br>
    <select class="{{$class}}" name="type_contact_id">
        <option value="" selected disabled>Qual o motivo do contato?</option>
        @foreach ($type_contact_id as $key => $item )
            <option value="{{$item->id}}" {{ old('type_contact_id') == $item->id ? 'selected' : null}}>{{$item->type_contact}}</option>
        @endforeach
    </select>
    {{ $errors->first('type_contact_id') }}
    <br>
    <textarea name="message" class="{{$class}}" placeholder="Preencha aqui a sua mensagem">{{old('message')}}</textarea>
    {{ $errors->first('message')}}
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>
