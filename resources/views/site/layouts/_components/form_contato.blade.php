{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    {{($errors->has('nome')) ? $errors->first('nome') : ''}}
    <br>
    <input name="telefone"value="{{ old('telefone') }}"  type="text" placeholder="Telefone" class="{{ $classe }}">
    {{($errors->has('telefone')) ? $errors->first('telefone') : ''}}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    {{($errors->has('email')) ? $errors->first('email') : ''}}
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contato as $key => $motivo)
            <option value="{{$motivo->id}}" {{ ( old('motivo_contato') == $motivo->id ) ? 'selected' : '' }} >{{ $motivo->motivo_contato }}</option>
        @endforeach
    </select>
    {{($errors->has('motivo_contato')) ? $errors->first('motivo_contato') : ''}}
    <br>
    <textarea name="mensagem"  class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha sua mensagem aqui no campo' }}</textarea>
    <br>
    {{($errors->has('mensagem')) ? $errors->first('mensagem') : ''}}

    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
