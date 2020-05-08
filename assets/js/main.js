if(window.location.pathname != '/aliyeff/'){
    preloader = false
}else{
    preloader = true
}
$(document).ready(function () {
    if(preloader){
        $('.preloader_text').typeIt({
            speed: 200,
            autoStart: false
        })
        setTimeout(() => {
            $('.preloader_text').css('background-position', 'right bottom')
            setTimeout(() => {
                $('.preloader_text').css('font-size', '1000px')
                $('.preloader').fadeOut(2200)
                setTimeout(() => {
                    $('.preloader').remove()
                }, 2200)
            }, 900)
        }, 2500)
    }else{
        $('.preloader').remove()
    }
    //   $('#fullPageScroll').fullpage({
	// 	//options here
	// 	autoScrolling:true
	// })

    new fullpage('#fullPageScroll',{
        loopTop: true,
        loopBottom: true,
        showActiveTooltip: false,
        navigation: true,
        navigationPosition: 'right',
        menu: '#myMenu',
    })
})