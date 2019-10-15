
<label class="form-label grid-item1" for="{{ $fieldId }}">{{ $labelText }}:</label>
<input maxlength="30" class="grid-item2 form-input {{ $errors->has($fieldId) ? 'is-invalid':'' }}" 
type="text" id="{{ $fieldId }}" name="{{ $fieldId }}" value="{{ $value }}">

@include('includes/validation', ['errFieldName'=>$fieldId])
