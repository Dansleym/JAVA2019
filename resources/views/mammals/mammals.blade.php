@extends('layouts/master')

@section('title', 'Ссавці')

@section('content')
<div class="container">

        <div class="flex-center1">
            <h2>Ссавці</h2>
        </div>

        <div class="flex-center1 ">
        
            <ul class="mammals__box ">

                @foreach($mammals as $mammal)  
                  
                    <li class="card">

                        <div class="cube-edit">
                            <a class="db_links" href="/editform/{{ $mammal->id }}">Редагувати</a>
                            <button class="btn db_links_red" type="button" data-toggle="modal" data-target="#deleteModal">Видалити</button>
                        </div>  

                        <a href="/showform/{{ $mammal->id }}">
                            <img class="mammals-img" src="/img/mammals/{{ $mammal->image }}" alt="">
                        </a>          

                        <div class="mammal-classes flex-center1">
                            <p>
                                {{ $mammal->genus }}
                            </p>    
                            <span class="information">{{ $mammal->information }}</span>                    
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
                    <p>Підтвердіть видалення ссавця</p>
                </h5>   
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>         
            </div>

            <div class="modal-body text-left">
                Видалити ссавця {{ $mammal->id }}
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
            var id = {!! $mammal->id !!} ;
            $.ajax({
                url: '/mammals/mammals'+id,
                type: 'post',
                data: {
                    _method: 'delete',
                    _token: "{!! csrf_token() !!}"
                },
                success: function(msg){
                    location.href="/mammals/mammals";
                }
            });
        });
    });
</script>
@endsection       