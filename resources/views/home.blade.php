@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">{{ __('Tarefas') }}</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ __('Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Tarefas') }}</li>
                </ol>
            </div>
            </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title no_margin"><a href="#" id="add_tarefa">{{ __('Adicionar Tarefa') }} <i class="mdi mdi-plus"></i></a></h4>
                        <div id="form_tarefa">
                            <form class="form-material m-t-20 row" method="POST" action="{{ route('task.adiciona') }}">
                                @csrf
                                <div class="form-group col-md-8 m-t-20">
                                    <input type="text" class="form-control form-control-line" autocomplete="off" name="tare_titu" value="" placeholder="Título"> </div>
                                <div class="form-group col-md-4 m-t-20">
                                    <input type="text" class="form-control" name="tare_venc" placeholder="Vencimento da Tarefa" id="mdate">
                                </div>
                                <div class="form-group col-md-12 m-t-20 form-control-line">
                                    <label>{{ __('Descrição') }}</label>
                                    <textarea class="form-control" rows="2" name="tare_desc"></textarea>
                                </div>
                                <div class="form-group col-md-12 form-control-line">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 pull-right" id="submit_tarefa">{{ __('Adicionar') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('Tarefas') }}</h4>
                        <div class="demo-checkbox">
                            @foreach($tasks as $task)
                                <div class="div_{{ $task->tare_sequ }}">
                                    <input type="checkbox" id="md_checkbox_{{ $task->tare_sequ }}" class="tarefa chk-col-green" 
                                    @if($task->tare_stat != 1)
                                        checked="" 
                                    @endif
                                    >
                                    <label for="md_checkbox_{{ $task->tare_sequ }}" id="md_checkbox_{{ $task->tare_sequ }}_lab"
                                    @if($task->tare_stat != 1)
                                        class="risked"
                                    @endif>{{ $task->tare_titu }} - {{ \Carbon\Carbon::parse($task->tare_venc)->format('d/m/Y')}} 
                                    
                                    <a href="#" class="pull-right cancel-link" id="{{ $task->tare_sequ }}"> Excluir </a>
                                    <a href="#" class="pull-right edit-link" data-toggle="modal" data-target="#responsive-modal-{{ $task->tare_sequ }}" > Editar </a>
                                    </label>
                                    
                                    <div id="responsive-modal-{{ $task->tare_sequ }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">{{ __('Atualizar') }}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="modal_update_form" method="POST" action="{{ route('task.atualiza') }}">
                                                        @csrf
                                                        <input type="hidden" class="form-control" name="tare_sequ" value="{{ $task->tare_sequ }}">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">{{ __('Titulo') }}</label>
                                                            <input type="text" class="form-control" autocomplete="off" id="titulo" name="tare_titu" value="{{ $task->tare_titu }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="vencimento" class="control-label">{{ __('Vencimento') }}</label>
                                                            <input type="date" class="form-control vencimento" id="tare_venc" name="tare_venc" value="{{ \Carbon\Carbon::parse($task->tare_venc)->format('Y-m-d')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="control-label">{{ __('Descrição') }}</label>
                                                            <textarea class="form-control" id="message-text" name="tare_desc">{{ $task->tare_desc }}</textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">{{ __('Salvar') }}</button>
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">{{ __('Fechar') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{ asset('assets/js/moment-with-locales.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{ asset('assets/js/tarefas.js')}}"></script>
<script> 
    function alteraStatus(status, tare){
        $.ajax({
            url: "{{ url('atualiza-status') }}",
            method: 'POST',
            beforeSend: function() {
                if(status == 1)
                    swal("Tarefa reaberta com sucesso!", "", "success")
                else if(status == 2)
                    swal("Tarefa concluída com sucesso!", "", "success")
            },
            data: {
                id: tare.attr('id'),
                tipo: status
            },
            success: function(result){}
        }).done(function(){
            if(status == 1)
                $('#'+tare.attr('id')+'_lab').removeClass('risked');
            else if(status == 2)
                $('#'+tare.attr('id')+'_lab').addClass('risked');
        });
    }
    $(document).ready(function() {
        $("#add_tarefa").on('click', function() {
            $("#form_tarefa").slideToggle( "slow", function(){});
        });
        $('.tarefa').on('click', function(){
            var tare = $(this);
            if ($(this).is(':checked')) {
                alteraStatus(2, tare)
            }else{
                alteraStatus(1, tare)
            }
        });
        $('.cancel-link').on('click', function(){
            if(confirm('Tem certeza que deseja excluir permanentemente?')){
                var tare = $(this);
                $.ajax({
                    url: "{{ url('exclui-tarefa') }}",
                    method: 'POST',
                    beforeSend: function() {},
                    data: {
                        id: 'md_checkbox_'+$(this).attr('id'),
                    },
                    success: function(result){
                        $('.div_'+result.tare_sequ).fadeOut(300);
                    }
                }).done(function(){ 
                    swal("Tarefa excluída com sucesso!", "", "success");
                });
            }
        });
        $('.modal_update_form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function(data){
                    document.location.reload(true);
                }
            });
        });
    });
</script>
@endsection
