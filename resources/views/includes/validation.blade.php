<small class="grid-item3">
    <ul>
        @foreach($errors->get($errFieldName) as $error)
            <li class="error">{{ $error }}</li>
        @endforeach                
    </ul>                 
</small>