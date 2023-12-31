@extends('layouts.main')
@section('title', 'Eventos')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form enctype="multipart/form-data" action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="image">Selecione uma imagem:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Título do evento">
            </div>
            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <div class="select-radio">
                    <div>
                        <input name="private" id="private" value="0" type="radio" checked>
                        <label for="">Não</label>
                    </div>
                    <div>
                        <input name="private" id="private" value="1" type="radio">
                        <label for="">Sim</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adcione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Openbar"> Openbar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Area-VIP"> Area-VIP
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Camarote"> Camarote
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Buffet"> Buffet
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cobertura"> Cobertura
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Assentos"> Assentos
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Show-AoVivo"> Show-AoVivo
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
@endsection
