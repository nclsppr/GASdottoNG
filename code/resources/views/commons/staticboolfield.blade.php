<div class="form-group">
	<label class="col-sm-3 control-label">{{ $label }}</label>
	<div class="col-sm-{{ $fieldsize }}">
		<label class="static-label text-muted">
			@if($obj->$name)
			SI
			@else
			NO
			@endif
		</label>
	</div>
</div>