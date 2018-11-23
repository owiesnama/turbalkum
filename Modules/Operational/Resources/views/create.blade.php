@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


    <operational-create-view inline-template>
        <div class="container">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Default Box Example</h3>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <form method="post" action="/">
                    @csrf()

                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="form-group">
                                    <label for="">
                                        إختر الخدمة
                                    </label>
                                    <select class="form-control"
                                            v-model="service"
                                            @change="fetchServices"
                                            name=""
                                            id="">
                                        <option v-for="service in services" :value="service.id" v-text="service.name"></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">
                                        نوع الخدمة
                                    </label>
                                    <select class="form-control" name="" id=""></select>
                                </div>

                            </div>
                        </div>

                        {{--model and manufacturing country--}}
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>
                                        إسم بلد المنشاء
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        الموديل
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        {{--price and warranty   --}}
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>
                                        عدد سنوات الضمان
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        السعر
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        {{--service method--}}
                        <p class="text-muted">طريقة تقديم الخدمة</p>
                        <div class="row"
                        >
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label>
                                        <input type="radio"
                                               v-model="saleMethod"
                                               value="1"
                                               name="saleMethod">
                                        بيع
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4
">
                                <div class="form-group">
                                    <label>
                                        <input type="radio"
                                               v-model="saleMethod"
                                               value="0"
                                               name="saleMethod">
                                        إيجار
                                    </label>
                                </div>
                            </div>


                        </div>

                        <div v-if="isSale">
                            <p class="text-muted">الحالة</p>
                            <div class="row"
                            >
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="saleStatus">
                                            جديد
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="saleStatus">
                                            مستعمل
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div >

                        <div v-else="isSale" >
                            <p class="text-muted">شكل الإيجار</p>
                        <div class="row"
                        >

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for=""> السعر</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox">
                                        بالساعه
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for=""> السعر</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox">
                                        باليوم </label>
                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <label for=""> السعر</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox">
                                        بالفدان
                                    </label>
                                </div>
                            </div>

                        </div>
</div >


                        <p class="text-muted">الخدمات المتوفرة</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </div>


                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">تقديم</button>
                        </div>
                        <!-- box-footer -->
                    </div>
                </form>
                <!-- /.box -->
            </div>

        </div>
    </operational-create-view>
@stop

@section('css')

@stop

@section('js')

@stop