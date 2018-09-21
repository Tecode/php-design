!function () {
    // 保存景点信息
    $('#scenicspot').on('click', function () {
        $.ajax({
            dataType: 'json',
            type: 'post',
            url: '/admin/scenicspot',
            data: $('#formData').serialize()+'&images='+window.imageData.join(','),
            success: function (data) {
                var time = 5;
                var timer = setInterval(function () {
                    $('.alert').remove();
                    $('#formData').before(
                        '<div class="alert alert-success">'+
                        '<strong>'+ data.msg +'</strong> '+ time +'S 后刷新页面</div>'
                    );
                    time--;
                    if (time === 0) {
                        clearInterval(timer);
                        window.location.reload();
                    }
                }, 1000);
                console.log(data.msg);
            },
            error: function (err) {
                var time = 5;
                var timer = setInterval(function () {
                    $('.alert').remove();
                    $('#formData').before(
                        '<div class="alert alert-danger">'+
                        '<strong>'+ JSON.parse(err.responseText).msg +'</strong> '+ JSON.parse(err.responseText).text + time +'S 后关闭提示</div>'
                    );
                    time--;
                    if (time === 0) {
                        clearInterval(timer);
                        $('.alert').remove();
                    }
                }, 1000);
                console.log(err.responseText);
            }
        });
        console.log($('#formData').serialize(), window.imageData);
    });
}();
// 保存编辑的景点信息
function editScenicSpot(id) {
    $.ajax({
        dataType: 'json',
        type: 'put',
        url: '/admin/scenicspot/'+id,
        data: $('#formData').serialize()+'&images='+window.imageData.join(','),
        success: function (data) {
            var time = 5;
            var timer = setInterval(function () {
                $('.alert').remove();
                $('#formData').before(
                    '<div class="alert alert-success">'+
                    '<strong>'+ data.msg +'</strong> '+ time +'S 后刷新页面</div>'
                );
                time--;
                if (time === 0) {
                    clearInterval(timer);
                    window.location.reload();
                }
            }, 1000);
            console.log(data.msg);
        },
        error: function (err) {
            var time = 5;
            var timer = setInterval(function () {
                $('.alert').remove();
                $('#formData').before(
                    '<div class="alert alert-danger">'+
                    '<strong>'+ JSON.parse(err.responseText).msg +'</strong> '+ JSON.parse(err.responseText).text + time +'S 后关闭提示</div>'
                );
                time--;
                if (time === 0) {
                    clearInterval(timer);
                    $('.alert').remove();
                }
            }, 1000);
            console.log(err.responseText);
        }
    });
    console.log($('#formData').serialize(), window.imageData);
}
// 删除景点信息
function deleteList(id) {
    $.ajax({
        dataType: 'json',
        type: 'delete',
        url: '/admin/scenicspot/'+id,
        success: function (data) {
            alert(data.msg);
            window.location.reload();
        },
        error: function (err) {
            alert(err.responseText);
            console.log(err.responseText);
        }
    });
}
//删除图片
function deleteImage(id) {
    $.ajax({
        dataType: 'json',
        type: 'delete',
        url: '/admin/deleteImage/'+id,
        success: function (data) {
            alert(data.msg);
            window.location.reload();
        },
        error: function (err) {
            alert(err.responseText);
            console.log(err.responseText);
        }
    });
}
//删除订单
function deleteOrder(id) {
    $.ajax({
        dataType: 'json',
        type: 'delete',
        url: '/admin/deleteOrder/'+id,
        success: function (data) {
            alert(data.msg);
            window.location.reload();
        },
        error: function (err) {
            alert(err.responseText);
            console.log(err.responseText);
        }
    });
}
function deletedComment(id) {
    $.ajax({
        url: '/admin/comment/'+id,
        type: 'POST',
        success: function () {
            alert('删除成功');
            window.location.href = '/admin/comment'
        }
    })
}