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
                                    <input type="text" class="form-control form-control-line" name="tare_titu" value="" placeholder="Título"> </div>
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
                                <input type="checkbox" id="md_checkbox_{{ $task->tare_sequ }}" class="tarefa chk-col-green" 
                                @if($task->tare_stat != 1)
                                    checked="" disabled
                                @endif
                                >
                                <label for="md_checkbox_{{ $task->tare_sequ }}" id="md_checkbox_{{ $task->tare_sequ }}_lab"
                                @if($task->tare_stat != 1)
                                    class="risked"
                                @endif>{{ $task->tare_titu }} - {{ \Carbon\Carbon::parse($task->tare_venc)->format('d/m/Y')}} 
                                @if($task->tare_stat == 2)
                                    <small class="m-l-20">(Finalizada)</small>
                                @elseif($task->tare_stat == 3)
                                    <small class="m-l-20">(Cancelada)</small>
                                @else
                                    <a href="#" class="pull-right cancel-link" id="{{ $task->tare_sequ }}"> Cancelar </a>
                                    <a href="#" class="pull-right edit-link" data-toggle="modal" data-target="#responsive-modal-{{ $task->tare_sequ }}" > Editar </a>
                                @endif 
                                </label>
                                <div id="responsive-modal-{{ $task->tare_sequ }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">{{ __('Atualizar') }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('task.atualiza') }}">
                                                    @csrf
                                                    <input type="hidden" class="form-control" name="tare_sequ" value="{{ $task->tare_sequ }}">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">{{ __('Titulo') }}</label>
                                                        <input type="text" class="form-control" id="titulo" name="tare_titu" value="{{ $task->tare_titu }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vencimento" class="control-label">{{ __('Vencimento') }}</label>
                                                        <input type="date" class="form-control vencimento" id="tare_venc" name="tare_venc" value="{{ \Carbon\Carbon::parse($task->tare_venc)->format('Y-m-d')}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">{{ __('Descrição') }}</label>
                                                        <textarea class="form-control" id="message-text" name="tare_desc">{{ $task->tare_desc }}</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">{{ __('Fechar') }}</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">{{ __('Salvar') }}</button>
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
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{ asset('assets/js/tarefas.js')}}"></script>
<script> 
$(document).ready(function() {
    $("#add_tarefa").click(function() {
        $("#form_tarefa").slideToggle( "slow", function(){});
    });
    $('.tarefa').on('click', function(){
        if ($(this).is(':checked')) {
            var tare = $(this);
            $.ajax({
                url: "{{ url('atualiza-status') }}",
                method: 'post',
                beforeSend: function() {
                    swal("Tarefa Atualizada com sucesso!", "", "success")
                },
                data: {
                    id: $(this).attr('id'),
                    tipo: 2
                },
                success: function(result){
                    console.log(result);
                }
            }).done(function(){
                tare.prop("disabled", true);
                $('#'+tare.attr('id')+'_lab').addClass('risked');
            });
        }
    });
    $('.cancel-link').on('click', function(){
        var tare = $(this);
        $.ajax({
            url: "{{ url('atualiza-status') }}",
            method: 'post',
            beforeSend: function() {
                swal("Tarefa Atualizada com sucesso!", "", "success")
            },
            data: {
                id: 'md_checkbox_'+$(this).attr('id'),
                tipo: 3
            },
            success: function(result){
                console.log(result);
            }
        }).done(function(){
            $('#md_checkbox_'+tare.attr('id')).prop("checked", true);
            $('#md_checkbox_'+tare.attr('id')).prop("disabled", true);
            $('#md_checkbox_'+tare.attr('id')+'_lab').addClass('risked');
        });
    });
});
</script>
@endsection
