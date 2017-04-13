@extends ('prospect.layouts.master')

@section ('content')

          <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update your Information Sheet</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12">

                                   {!! Form::model([ $prospect, ['route' => [ 'prospect.update', $prospect ]]]) !!}
                                        
                                        @include ('layouts.informationsheet')

                                   {!! FORM::close() !!}
 
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
        <!-- /#page-wrapper -->

@endsection