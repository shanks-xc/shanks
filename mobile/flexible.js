
            //JS监听浏览器文字大小代码
            (function (doc, win) {
                var docEl = doc.documentElement,
                    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                    recalc = function () {
                        var clientWidth = docEl.clientWidth;
                        if (!clientWidth) return;
                        docEl.style.fontSize = 20 * (clientWidth / 375) + 'px';
                    };

                if (!doc.addEventListener) return;
                win.addEventListener(resizeEvt, recalc, false);
                doc.addEventListener('DOMContentLoaded', recalc, false);
            })(document, window);



            var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

            //product bar
            $(function(){
                $(".mw-categorybar .mw-categorybar-left").click(function(){
                    $(".fixed").removeClass("show")
                })
                $(".page_products .category-btn").click(function(){
                    $(".fixed").addClass("show")
                })
            })

            //
            $(function(){
                $(".productBar .m_header_right").click(function(){
                    $(".share_warp").show("slow")
                    $("body").addClass("overflow")
                })

                $(".share_mask").click(function(){
                    $(".share_warp").hide("slow")
                    $("body").removeClass("overflow")
                })
            })





            
