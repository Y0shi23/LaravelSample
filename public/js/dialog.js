function delData(){
    document.getElementById('form.deleteData').action = '/sample/vali/destroy/{{ $data->name }}';
}