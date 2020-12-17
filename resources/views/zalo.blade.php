@extends('layout.main')
@section('styles')
    <style>
        .result__ {
            border: 1px solid #eae2e2;
            height: 600px;
            border-radius: 5px;
        }
    </style>
@endsection
@section('content')

    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" id="hello">Lấy thông tin Teamplate ZNS!</h1>
    </div>
    <!-- params -->
    <div class="content col-8" id="item__">
{{--        <form action="">--}}
            <div class="mb-3 row">
                <div class="form-group item">
                    <label for="inputPassword" class="col-sm-2 col-form-label">User Access Token</label>
                    <div class="col-sm-10">
                        <input type="text" v-model="access_token" name="access_token" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="form-group item">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Template ID</label>
                    <div class="col-sm-10">
                        <input type="text" v-model="template_id" name="template_id" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            <div  class="check_tem col-sm-10 text-end">
                <button v-on:click="exitTemplate()" class="btn btn-primary">Kiểm tra Template</button>
            </div>
{{--        </form>--}}
        <!-- result -->
        <div class="result_template">
            <h3 class="">Result</h3>
            <div class="result__">
                @{{ message_error }}
                <a  href=""  >@{{ result.url }}</a>
{{--                <button-counter></button-counter>--}}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const template_info_url = 'https://business.openapi.zalo.me/template/info';
        const app = new Vue({
            el: '#item__',
            data: {
                template_id : '',
                access_token : '',
                message_error : '',
                'result'  : {
                    url : '',
                    title : ''
                }
            },
            methods : {
                exitTemplate : function () {
                // <a href="'+reponse.data.data.previewUrl+'">Xem mẫu thông báo</a>
                    let a = 'https://zns.oa.zalo.me/znspreview/M8wDmgv5vHeIigMNFGhSXw=='
                    this.result.url = 'https://zns.oa.zalo.me/znspreview/M8wDmgv5vHeIigMNFGhSXw==';
                    this.result.title = 'Xem mẫu thông báo';

                    // window.axios.get(template_info_url, {
                    //   params : {
                    //       access_token : this.access_token,
                    //       template_id : this.template_id,
                    //   }
                    // }).then(reponse => {
                    //     this.message_error = '<a href="'+reponse.data.data.previewUrl+'">Xem mẫu thông báo</a>';
                    //         // reponse.data
                    // }).catch(function (error) {
                    //     this.message_error = error.data
                    // });
                }
            }
        })
    </script>
@endsection
