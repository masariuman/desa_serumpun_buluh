@extends('template')

@section('main')
	
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Kondisi Geografis Desa</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div>
                  {!! Form::model($kategori, ['method' => 'PATCH', 'action' => ['DesaController@update_geografis', $kategori->id], 'files' => true]) !!}
                      {!! csrf_field() !!}
                      @if(isset($kategori))
  {!! Form::hidden('id',$kategori->id) !!}
@endif
{!! Form::label('peta', 'Peta :', ['class' => 'control-label']) !!}
{!! Form::file('peta') !!}
@if($errors->has('peta'))
  <span><i><b><font color="red">{{$errors->first('peta')}}</font></b></i></span><br>
@endif
<br><br>
<!-- isi -->
{!! Form::label('geografis', 'Kondisi Geografis Desa :', ['class' => 'control-label']) !!}
{!! Form::textarea('geografis', null, ['class' => 'form-control']) !!}
@if($errors->has('geografis'))
  <span><i><b><font color="red">{{$errors->first('geografis')}}</font></b></i></span><br>
@endif

<!-- tinymce -->
<script src="{{  URL::to('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
  var editor_config = {
    path_absolute : "{{ URL::to('/') }}/",
    selector: 'textarea',
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak table",
      "searcheplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clienWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clienHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      }
      else {
        cmsURL = cmsURL + "&type=files";
      }

      tinymce.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }

  };
  tinymce.init(editor_config);
</script>
<br>
<div class="form-group">
  {!! Form::submit('Ubah Kondisi Geografis', ['class' => 'btn btn-primary form-control']) !!}
</div>
                  {!! Form::close() !!}
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

@stop