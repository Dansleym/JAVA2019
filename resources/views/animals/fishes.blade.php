@extends('layouts/master')

@section('title', 'Риби')

@section('content')
<div class="container">

        <div class="flex-center1">
            <h2>Риби</h2>
        </div>
        <div class="flex-center1 ">
        
            <ul class="mammals__box ">

                @foreach($fishes as $fish)  
                  
                    <li class="card">

                        <div class="cube-edit">
                            <a class="db_links" href="/editformfish/{{ $fish->id }}">Редагувати</a>
                            <button class="btn db_links_red" type="button" data-toggle="modal" data-target="#deleteModal">Видалити</button>
                        </div>  

                        <a href="/showform/{{ $fish->id }}">
                            <img class="mammals-img" src="/img/fishes/{{ $fish->image }}" alt="">
                        </a>          

                        <div class="mammal-classes flex-center1">
                            <p>
                                {{ $fish->genus }}
                            </p>    
                            <span class="information">{{ $fish->information }}</span>                    
                        </div>

                    </li> 
     
                @endforeach
                
            </ul>
        </div> 
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex='-1' role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                    <p>Підтвердіть видалення риби</p>
                </h5>   
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>         
            </div>

            <div class="modal-body text-left">
                Видалити ссавця {{ $fish->id }}
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">
                    Ні
                </button>

                <button type="button" id="delete-animal">
                    Видалити
                </button>
            </div>
        </div>
    
    </div>

</div>

<script>
    $(document).ready(function(){
        $("#delete-animal").click(function(){
            var id = {!! $fish->id !!} ;
            $.ajax({
                url: '/animals/fishes'+id,
                type: 'post',
                data: {
                    _method: 'delete',
                    _token: "{!! csrf_token() !!}"
                },
                success: function(msg){
                    location.href="/animals/fishes";
                }
            });
        });
    });
</script>
@endsection       