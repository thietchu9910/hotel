window.util = {
    convertImg: function(inpTag, imgSeleector, defaultImgUrl) {
        var file = inpTag.files[0];
        if (file === undefined) {
            $(`${imgSeleector}`).attr('src', `${defaultImgUrl}`);
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $(`${imgSeleector}`).attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
}