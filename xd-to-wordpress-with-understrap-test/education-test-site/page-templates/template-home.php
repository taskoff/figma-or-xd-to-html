<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="home-page-wrapper">
    <section class="educations" id="educations">
       <div class="education-box">
        <div class="img-wrapper">
            <img src="<?php echo get_template_directory_uri() . '../img/education-img.jpg'?>" alt="">
        </div>
        <div class="card-education">
            <div>
                <h3>Education</h3>
                <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui
                </p>
            </div>
            <ul>
                <li class="h3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
                            <image id="icon_1" width="40" height="40" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU0NkVCNkFFQ0JBODExRTZCMThCOTI0RDI0MUFFQTFFIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU0NkVCNkFGQ0JBODExRTZCMThCOTI0RDI0MUFFQTFFIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTQ2RUI2QUNDQkE4MTFFNkIxOEI5MjREMjQxQUVBMUUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTQ2RUI2QURDQkE4MTFFNkIxOEI5MjREMjQxQUVBMUUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7Kf5n9AAAERklEQVR42syZeUhVQRTGfZaRZfueRdFCiq20EEiZLVT/GC1YVAaaRfWPkRW0CBWGtEfRTkZFGy0Gga2WWQbtWZSGWYJBtO+WZb6+A9+FYbrPN+95TQd+nPvuMn4zc86Zc68ut9sdUJtbXbuTYRnxS2FWgwsF4/eNxu9MHI916G8OAdetH+i/0ptd+gxCTArMKrAFnGBnFSAD7ADf5TkQAkJBkKEw6SMWjARDwTUTgXYzKOK248EkCg7k+eMgD4wBv8B53PMR132ZvT0cdA4YDq54eyDQw/lMZQlk5IXgMHgN9oMj4APEXYWtZyguDBwAk8BBcBlE+yuwqbLknWC6c9QDIdgl8A/KUj0xFNgFxIEOYAY4KSLRf7Q/Al3KsYz0DURFgTsUfRSmFf2wK9hgIPAHbXNamclT3kQGVromGfEdOfJZ2qX24uQQLAGTChYYCLSC6ZNybiI4Q5EjfRaIFkF7Uz0JYbK0iei0Aewtw77e0LbU+oqBmQ/e+SOwhLadfgEd7wWlOIzkKW8Z/wEo5oAkgnsKGGQ3prR3OO7hk0AIeAzzFmyu5LbF4KKBQGkDQD7IAo9IIXNkiV3A1TXoVPzvNEa3HoIXKv7ZEOYSA2qaYSS/B71AbzVTKCsw2B+BcVyaZIhK4mwFg2G8HslZ9qU9tNvq0P93X6M4gpE2ATQD20ALRuQyIEFyw8HaoLWvM9iRtggj/cJo0wfx/6sZpd2nnQwh5bJHg/pK2pjDIqLamrcofs0kvBukS7CAqSAK5HInWKk8IgP4yGRslVQreO4DsY6TnZhBdQcYBMG3uaxhOJ4AO5eicpg6JC2d5f0vaQtZfLi1bbS4ygIhQJZzDVhniWO7h2vBUjTAxrLSacMg2qZ1c4g4v8Ro/Wm3aucl4+cxF25k9Fkz05ARLzTWKiQ518TJIAlSqmHVNyXr9+UshyqXmtG/1BbCe68r50awSqqywLu0M1lp27UE8Jk+Vsp71YGVgWeMeGvHyHdkBjFTXzFDkupXwh7E7xeaj06XIpaJPIBi0m26kmywqzryoIhMgBAR8Bx2J99NJHhmg3H0zwz6luw8dXSX0Hy+nEXCN6fSjDUzBWCKslSyrIlgr+JXJw37kwo62xGBfKuTKF2C2UzH73B5q8NxkbbVnQN9tNcFT6+fT51c4gqIGKW8x3py8FK1Svlfe7El8hJE9gMxym7wh0m5jEVEkFa0yj2/wVquQAL907onS0s9VfLBABal+v55jL6YWslzm0BnmzTlclQgq+mFHsotb36Xa3CPX1td7fy65SGa45n3PL3ol7EUk0hezsHrPill2Dx+gHJWIFpbvpV5EviNthHvc9ms1itfV80XH0yDSTMo+bOVV4Vqq6hr6rOr21TgpxoS+NVUYFQNCQw38UGpkBfBt37yU4Tb3xxmmB2s/uWrQpJSfNgLRDAk0/FTamAGN/2THmr7vyH+CjAA8ENcpx3zvfcAAAAASUVORK5CYII="/>
                        </svg>
                    </span>Learn anything
                </li>
                <li class="h3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
                            <image id="icon_2" width="40" height="40" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjcwQUVFMzQzQ0JBODExRTZBMTc5QjQ4MDk2MjVBQUUyIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjcwQUVFMzQ0Q0JBODExRTZBMTc5QjQ4MDk2MjVBQUUyIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzBBRUUzNDFDQkE4MTFFNkExNzlCNDgwOTYyNUFBRTIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzBBRUUzNDJDQkE4MTFFNkExNzlCNDgwOTYyNUFBRTIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4eF0biAAAE7UlEQVR42syYCYhVVRjH75vFyTJtrLEosGyysW1CCstUbEGzBaNQbLFFDDMhW6hoDMdMs6mcVIgojQaNwoKUtImhdcqFLKgmy8KkVafSatKpYTRn7P/B78Dhct/1vvfuoAd+nLucd9//fuc73/edm6ladVtQQJskbhEjRd/QvQ/FDLEl7gHfXtsQ+wcleQqrEQs4/kd8JDaLVlEkThf25l+K/mJPvhbIVeCRYqM4V6wUT4nPsox9ibG7RYt4RryQq8CiHMd/j7gR4oYYcQEWnSqeF0eJZeJjjnvEguvE8bAzwXib+hfB2mjRLD7HBVK14AQWwsiE4qKaLZrB8FzaAl8Rm8SGPIRdICo43saU35F09pIIvFSUisk5CrPfPInfjfWuz6afnJbA28UB3j7uOQPFODFLvCP2iQe4P8obu0vsFdentUjGEi5csz+9QgwQ5eJYURb6zV/iWaw1R8wU073734jT0hBYjIAWznsxbQHXtuGXP1hSILRY5ujwnjEfgYvFPVz7lwBesMCM+EV8wvlg+hEhq8Y1m9Ja8ah4U7zLi3elIXA/vuXalfRf5Lhg5olr8E176U58NLUwY3n3MnEVFunII9xcJCZ6hqnCh+OnMEE10yQu986vE6vFyeJC/sxW+XaKBucCAzFAFylxqyf0HPEQL1qtiqYr3yk+AnFL7EHiEjEcK66LGG8rvD1LprAsdDXCyvFrE36C2FHIKrb2KSvQrPc6QqyUGo+FzK9upLoJCC0NWLaY4/Xcmyb+FqeE/qOgYqE3/SpW8hb+/CdvzHrveBOr3zW3IGxqv+K4I8k6OJjATnrLnY3iV2KfpalXxSKCrtWJ9azSPfjt/Ux3JW5ypyeu3IuJfxYisIuV24jPuej/mjjby6su9LicazFyoXdvScgv7QWGWU2pBdJeaJh5i9RWyRS5VktB0J/9yNBQSDmae2WetVywH8YsrEwrDjZ5lggH8jamMqpgbYsIyG4v83LaJf9cwkzfmDEW/y5OUPwu74k9yVwv+fvtTAL0blbyBxQDGyhW/TaH/q6eEGhhZU3Ew0sJtu+Js0hha6iie4fGPsICau+pXd3N9E9411rYBE2iWDURU7jW7I27l/4m+rutshmyesroNAVajFshHhT9QvfOEOeL85j2cHtavCF+ROxi8nmzRA5PS6C1W8kC34WuW+obwhSH98vu84erZqbjs07YqWkKDLBUBTl1YpaAn6EG3I51Lfb9x70ZzMAuzqsKKbeyNZuet71NuAn5jcU0gPsBOXlcxEekatxhEBlptrLK/LQsGFAoVGGZhfhWGSVaK0Hd1YVRX7jMJRokqpasNE++OCstCxYxrfsSjs9g2ayf3yRuJi9Vo2t1BxNYwYZ9FLHtRHFcxE5sK/nZCV3KmAnei2wMBexOfPcPCtWvxfsS1YgFH7M6U+drowSOZ4NT7V3bwZTtpDRqI8924ztNFBOBZ6UM/XI+cNZzrY84hpewFz7J+yyyQKIelkh7Rp2Oa6LKraH4kVW9a3H6uNaKdV2bGsrVm/nYWRf3hVWiKrGqa7+Hp7iU0rszi78VY4FM6N5e+rKE537atBnolsBud1FC+yHUFs3jurffBNaz8y8JDq9mMbPBRN1nTkpMyxxiUQeY3j6sh2klnjOvOBSKsn3l13TbKh9TRMDtDg6/Zpp+/l+AAQDTKEgNO4LxGAAAAABJRU5ErkJggg=="/>
                        </svg>
                </span>Talk to our instructors
                </li >
                
                <li class="h3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
                            <image id="icon_3" width="40" height="40" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY5Q0E1QjlGQ0JBODExRTY5RDRGRTExMjA3NDY5RUU3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY5Q0E1QkEwQ0JBODExRTY5RDRGRTExMjA3NDY5RUU3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjlDQTVCOURDQkE4MTFFNjlENEZFMTEyMDc0NjlFRTciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjlDQTVCOUVDQkE4MTFFNjlENEZFMTEyMDc0NjlFRTciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4EZespAAAE/ElEQVR42syYeWwVVRSHpwUKagtRjIgK7oJaERSrDdBgU/eoiOIuEYUABsWIxq3/mIiaKhExcQsquCsidcFAxBCsS5ECQTExyNII1RAQyqpdn7+TfJNcx5nXeX3zrCf5cufNvDfze+ece869kzfoo9u9BC1fjBM3iRHiyMD1PWKVWCDeFft+vub1Dm+YhBWJ10SbeE+UiuWiUlwhhokrxSxxuHhZ7BWLBy+acGKuBU7jYRNElThF9BPXi5lijSgTvcRbYrjIE2M53iyRVVE3756luGpxtXgJoW0h37lcPCkOdc59Lh7kj4wX8yXyEo3nKeTNSXnwa8RdLKZGiPMI/WF47WQxnfFHsVqC3tDYQ5wptktoQdCDfcUQ0UekYgjbLWYwCSycmzL4U5vFHDhHLJQge+ZleLhJ/CAG+z/I0yy2pL6hEx40gd8mkMPmwTHyZG+JtQm0S8zV50l+iIfyz44VAzpgIDedm5A4T0IsB/tzbNG5S0yU2GP8EFvuHBC/xbjfVMbJSRZPCTsgQcU6rNDxbB3PpFyVmQdbSdI49oLljWj3krdC8azEnaDxUjFKx4WZzOIzGB/LgTjzYq2GLeJNHX/P6VujBL4jtlGA99Ki6sSvlIdc2WwxkuOd4qIogdZLG8Tj4gk6QgPpELQq/sA34jjnvJWNJVx7JfCbEibmboXxXue8edHTuZ7c7/h0IbbZfS0tyTgKr7r2nHhAfCJOZyHg23einGuTiIpHtTAhO8RS8u5mrv3OeAjXi6IEXiWe5oGWDyv5wRGB790j5onbhCX30axgulH8h3PtYaLiR8e6yvniRrGRKFgebtVwFl63JtAS1Ys/BdesDD0VOFeHgFfxktk+Z5ZXkR4znI5TwzhFbEDILGeyrCfM9gfrMpnFCxgHOufKmTQ1NP2xtKsUneZC8ZU4KEbzG4uG5d2L4ktLAYm6P+R5Fq3aKA/2JeH9+phy+vR4Jo/vrWH0VUv6Ruce1ml6U57WhuTux9b/JW5d8OHynj+T50UJtJufyj/3rZnPdzgCfVsTcZ+mEHG+1aeJli1ot0v8liiBp4ll4n0S2rc+TJ47ybvETd4rwevl6RasVk4qbAEZENjmLBY+ZLYlbZajP8l7y9MJLCUHCwLn21lYLKFwFybsvRUcXtDRkn9bSFEO9uWdtL5i2mG24paydymR9/Znuyf5g9CvZAU8kZztjLBi9jRWlkZI3Ko4m6YyKnq6EO4gD60Yf4HASkRnYuX+9kHiNsXd1a1gQvzSwc0b2dkVshGqJexWuBdbsoutfNd2cIMQs5oKYZ1jjrxodfFuCvg/zPYk6wjXEOd8ij5cHWPn187386mPrXi3P9cPBracrr1Nnx7N3qSXBDfF8eBCwvxQhuGqp9PUsHAYJT4gDZYRkXq2mFPI3VvEeqd3T4/jwSQtRWg3RFwfwx6nlEZQIC+2JP1uJsoGBMawpX61sH3xSXi8NclXH16M/Iy7J9nF24p/vTzqyUIgF9bA2K2zN+iOuHOpX3mwh8+VIa9DprFIjTO7izhuyeaF46NskvMRZzc+WzziPMBztpzPs2doj3HvRpZOa7PxYNjyfiSlwt3QP8PSfXLILi1nFjVJ+jkrZo89w33C3hfP9/5DixLYg+nezALVxF1HAff+DwL/pEUtopCO6wpx6QT+xYbHxNnL78+8LrKoUrGfVUlFV4oz+1uAAQB98mtva2jylQAAAABJRU5ErkJggg=="/>
                        </svg>
                    </span>Speak with others
                </li>
            </ul>
        </div>
       </div>
    </section>
    <section class="features">
        <h2>Features</h2>
        <div class="card-wrapper section-wrapper">
            <div class="card-features">
                <div class="icon-wrapper center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="84" viewBox="0 0 64 84">
                        <image id="online_test" width="64" height="84" xlink:href="data:image/png;base64,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"/>
                    </svg>
                </div>
                <h3>Online Testing</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="card-features">
                <div class="icon-wrapper center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="54" height="84" viewBox="0 0 54 84">
                        <image id="expert_professor" width="54" height="84" xlink:href="data:image/png;base64,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"/>
                    </svg>
                </div>
                <h3>Online Testing</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="card-features">
                <div class="icon-wrapper center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="56" height="84" viewBox="0 0 56 84">
                        <image id="trusted_certification" width="56" height="84" xlink:href="data:image/png;base64,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"/>
                    </svg>
                </div>
                <h3>Online Testing</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="card-features">
                <div class="icon-wrapper center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="84" viewBox="0 0 84 84">
                        <image id="scientific_research" width="84" height="84" xlink:href="data:image/png;base64,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"/>
                    </svg>
                </div>
                <h3>Online Testing</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="card-features">
                <div class="icon-wrapper center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="56" viewBox="0 0 84 56">
                        <image id="audio_video" width="84" height="56" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAAA4CAYAAABjXd/gAAAFQklEQVR4nO2cW2wVRRjHf6epIqQoUUM9tQUFoQtFgYA+6IP3iILYBaWJoukSH8QECb4oiYkEozHGBG2iCQ+yhChRCF2igtZEH3wgKjGhEXFFUtJLilQjUiTVCq0P3x52ne7puey0PZf9JSed+WZn9+t/v9m57JyTqG9tXgW8CiSBQWCYmFyZBPwBbKsEdnuGmGhcBbRUAJdNtCclxD+VwHlgqmf4CGgDKifMpeLiAnArsN7LD6rC7QP2jqtLEXFNO1J9w7GiutCOLygVSmEy6tnLkBnBjCpoTERiQTUTC6qZWFDNxIJqJhZUM7GgmokF1UxZTTENx1qJzGoOuab9ylhcoywENRxrGvA28JRnWmY41iHXtL/Ufa2Sb/KGY60AfsIXM4Wa10LJRqjhWHXANmB1mkPuHIvrlmSEGo61HnAZKeb3gfRMw7GW6L52SQlqOFa14VifAu8CUwJFZ4GHXNNeCvwesK/R7UMhCloLvAQ4wHfAYWAP0jtPTVfJcKx1wHFguVLUCsxzTfszL98WKHtUk8+XKLRn6GZgC3C5Yl8KPOaVbQZ2pAoMx5qBRKQq5FngOde0dyn2D4EnvPQsYD5wLLrrQiFFqAO8xkgxg0wH3gNeR3zfCPzMSDG3A3NDxASJ0POB/Np8HQ6jUATdBTQqtn3AVkS8r5SyF4AO4C3gioC9G3jQNe1nXNPuC7uQa9r/IjcvRVMEv0egq8k/C1QBPUAXcBT4M8u6twNPBvJdwErkXU2Q25BX3rO9/EylfDuwyTXtgSyuuQc/MmcBDcCPWfo7KjoEbQE2KLa/kGh5A9gZcs0LgfzzgXQ/sBjZNKBy3DuvSgewwTXtg9m7TBswAEz28muAl3OonxYdTX5RiK0KmAfY+DetCtgPdCKdwOfAm8B9gXo7CRfzReAMsFCxtwBGjmLimvYgcCBg0tbb64jQdciM5Cak07g6UHYYGPLSq4FHvHQNIvgDyrlWAfcCp5FBeA/ybL1bOe5jYBPQEeE18l58Ied7/p/I92QpdAh6AnjYS08BDKAe2d6zG1/Qb5Dn6rRRzlXrfRqAe0Y57oxXvsRwrE7kBvR6HU62fK3k1yLDskgk6lub+/EHzBuRZjRWTAfuR0RbAMwFqpGIjbol6BTwA9DrfdqBk4jY3a5pj9gEZzjWfvxWcwy5kbnSiD9qODfeA/s+4IMQexIROImIuwjpfVNiZ+NnkvCNGsNAj+FYRxHRTwFHkPHrt/iCamn2hTJTSv2jYdQAN3t/k0jHdCMidh2QyHDuhHdcXUhZv5JvQrZ25k2hCDoaqSaskhKqAT86FyKRfR1wLZm3aV6p5JspA0HTMQx0uabdpRYYjlWBCFqNCL0YuAGJ8jnI5CBsivt3VKeKWdC0uKY9hDyv+5CO6otgueFY1UgU1yLP69nARWSqG4mSFDQTrmmfRnr/dsOxDmQ6PhcKZXGkZIgF1UwsqGZiQTWTTac0CRlI58ovSM9ZVmQS9BbgIHB9Huc+CSxD1jHLhkxNvpn8xASJ6sfzrFu0ZBJ0KEN5JqLWLzoyNfng+uIR4GlGX4wYBt5H1kTV+mWBKqi6CPFbIN3J/7eypKMXX9Bf8/SrmOgMZlRBm4Br8F+kBV9RLEB2byQIj9LUAu6cgK0RWYQYsymuhm/CReEisvByCXXFPiYa5+KBvWbUptiHvMaNhc6OIWSRuiZlUAXdCrwznh5FpQC+jbwC+CSVUSOxHHpl3XQHM2qE3uEdUDRNfoJ7+SHgrqAhUd/aPEj8Mxm6GIh/c0QvkyuR3W9byPx+OyYzO/4DGhgZW5aBQyUAAAAASUVORK5CYII="/>
                    </svg>
                </div>
                <h3>Online Testing</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <div class="card-features">
                <div class="icon-wrapper center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62" height="84" viewBox="0 0 62 84">
                        <image id="professional_course" width="62" height="84" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD4AAABUCAYAAADaroR4AAADr0lEQVR4nO2cy48MQRzHPzO7LLuIgyCRSIREOUgQVsTBK/YiIv0PoMRB4kw8Irg44OAiJB4dEgmH3TpwIJtFhMTNK6EPEiLxCEJIFrt2rEP1Znpbr5meqemhqz7JZruqf1Xz+079prqrq6oL83u2bgKOAzOwg6/AsVbgNDCzyc5kyWTgRBFoabYnTeBHK/A9knEVuI7+MvZTDv9bQDf/75dUApYBW8L0z9aYQTdwITzeRll4L3AyqcbA8+vySChZV/lqP18ouZKycIqx89HfelvkeFrNnv07zI4m4sKtwQm3DSfcNpxw24jfwNSFUDLzgY5Qcjjw/PdpyxkRLpRcCFwB5pqoLyXDQslHgBd4/ptqC5lq8T3AAkN11UInsBM9vqgKU7/xiYbqqYfJaYxNtXh0hHcPOIgeyRUM1R+nhG6088CsBB8qYrRzC3keeH5ftcZ1js4+UxaeikZczlKFXJ2Mr7VgI1r8D4SSi4F5YXI4drqIDt1nwNNIfhvQBUwCBoAHwAtTPjVcuFByA3CtSvNVwB20X3eBpZFzpTD90IRfWdy5daWwXR3+b2O0aNCdZacJhyCbUD+KdliE6XioF8K8x8CZMK8fOATsADqAQeA+cNmUUw0XHnj+a2CFULIjzBpL+LdY/mHgCDABGCLl5aoSmXRuAIHn9yflV7ic/Qz/jONGZ41CKNkOnAIWh1nxUK9EER3qvcBuU35lEer7gM0G6lkEPAIuGagrk1B/abCut6YqyqJXPyuULAFLwqy0od6C7uB6gZum/MqkVw883wcS53rqnUKqlUaEutHrbQWGai3YiBafLpQUlc2M0F5rQVPCx0WO16NHWlmTSoupUJ9gqJ56aKtsUsaU8JPoMXOz+MgYnedYGAn1wPNvCCXnoB8DjQw6sqAA/EI/7vqSpqCxzi3w/LfUcIOR1YqIONYOUpxw23DCbcMJtw0n3DaccNvIrXCh5F+nkHMpXCi5C3gllOwTSk5JssmdcKHkVPRE5QxgLeAl2eVOOHp2NUriwqQ8Ch9CTyuPMJhklEfhVeGE24YTbhtOuG044bbhhNuGE24bTrhtOOG24YTbhhOeIwqM1pWoMY/Chxm9msuax8sf0ftbR7idZJQ74YHnl4B1wHZgeeD5T5Ls4gv8ojvvo0s0P5l1r7EEnj8AnItlv44m4sLXAB/QuwKirznqBDaS8JKrZi20T/n5Jcq7GAEozO/Z+g57XmI3Qn+Rf2PJddZ0tAJ7gQPo7co2MABc/A2hxLE87a7CrwAAAABJRU5ErkJggg=="/>
                    </svg>
                </div>
                <h3>Online Testing</h3>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <h2>Courses</h2>
        <div class="card-wrapper section-wrapper">
            <div class="card-course">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/course-1.jpg'?>" alt="">
                </div>
                <div class="text">
                    <h3>Web Design</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    <p class="time h3">Time : 3 pm</p>
                    <p class="teacher h3">Teacher: Ressie Rottman</p>
                    <div class="btn-container center">
                        <button class="button">Join Now</button>
                    </div>
                </div>
            </div>
            <div class="card-course">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/course-2.jpg'?>" alt="">
                </div>
                <div class="text">
                    <h3>Photography</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    <p class="time h3">Time : 3 pm</p>
                    <p class="teacher h3">Teacher: Ressie Rottman</p>
                    <div class="btn-container center">
                        <button class="button">Join Now</button>
                    </div>
                </div>
            </div>
            <div class="card-course">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/course-3.jpg'?>" alt="">
                </div>
                <div class="text">
                    <h3>Digital Marketing</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    <p class="time h3">Time : 3 pm</p>
                    <p class="teacher h3">Teacher: Ressie Rottman</p>
                    <div class="btn-container center">
                        <button class="button">Join Now</button>
                    </div>
                </div>
            </div>

        </div>
        <p class="bottom-link"><a href="">View All</a></p>

    </section>
    <section class="our-teachers" id="teachers">
        <h2>Our Teachers</h2>
        <div class="section-wrapper teachers-wrapper">
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-1.jpg'?>" alt="">
                </div>
                <div >
                    <p class="name h3">Velvet Vachon</p>
                    <p class="job h3">Design Head</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-2.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Arlene Anello</p>
                    <p class="job h3">SEO Head</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-3.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Benton Colley</p>
                    <p class="job h3">Photography Head</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-4.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Floyd Fukuda</p>
                    <p class="job h3">Marketing HOD</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-5.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Elena Cully</p>
                    <p class="job h3">Design Head</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-6.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Burton Brooke</p>
                    <p class="job h3">Web Technologist</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-7.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Ressie Rottman</p>
                    <p class="job h3">Design Head</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-8.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Reed Recio</p>
                    <p class="job h3">Photography Head</p>
                </div>
            </div>
            <div class="teacher-info">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/teacher-9.jpg'?>" alt="">
                </div>
                <div>
                    <p class="name h3">Nancee Bluford</p>
                    <p class="job h3">SEO Head</p>
                </div>
            </div>
        </div>
    </section>
    <section class="programs" id="programs">
        <h2>Programs</h2>
        <div class="cards-wrapper section-wrapper">
            <div class="card-wrapper first">
                    <div class="content">
                        <h3>Pre-college education</h3>
                        <p class="description">Broaden the creative horizons of your kids</p>
                    </div>
            </div>
            <div class="card-wrapper second">
                <div class="content">
                    <h3>Middle school</h3>
                    <p class="description">Broaden the creative horizons of your kids</p>
                </div>
            </div>
            <div class="card-wrapper third">
                <div class="content">
                    <h3>High school</h3>
                    <p class="description">Preparing youngsters for the  adult life</p>
                </div>
            </div>
            <div class="card-wrapper fourth">
                <div class="content">
                    <h3>International exchange</h3>
                    <p class="description">Accepting students from abroad</p>
                </div>
            </div>
            <div class="card-wrapper fifth">
                <div class="content">
                    <h3>Graduate programs</h3>
                    <p class="description">Solidifying knowledge that was obtained through the long years of learning</p>
                </div>
            </div>
            <div class="card-wrapper sixth">
                <div class="content">
                    <h3>Home education</h3>
                    <p class="description">Providing robust distant education</p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <h2>What client say</h2>
        <div class="testimonials-wrapper">
            <div class="arrows">
                <div class="left arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="44" viewBox="0 0 24 44">
                        <defs>
                          <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 24 44">
                            <image width="24" height="44" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAsCAYAAAB/nHhDAAABgklEQVRYha3Wu07DQBCF4Q+ccAkISIdoA+L9XweoaAkSV9EghcJZ2Jh14vXuaWy5OP/OmRnbDU5xi2O8qqwGlzjDDAe1IQ0+cI7pGnKEl5qAFZ5xsYYcq1hJs752IdXiaqL7FZYdSHFcTeJZN66pgkpSgBBXaPwJDo2sJAUIkCXmCuPqAwQVT9cuQDeumcy4dgFiyBwTmSM8BBDU3ZNB05UD6C7jiQGNzwEESJiuiQGNzwUELW02vhcyFsD/niTjKgF0Icm4SgGpF+TGnpQCguLGb0BqAej5ntQErPDkbz9m2N+vCAj6ju6nk8rmC21MtD8Tj3sVza+1ywfvuINaES0i849gDjUqiGP5PXktwI32rzBpTllEi13mjK8g2dCUxlQQm280NKXcPYinZevJg3IiGhxLrKERxSf/HGrOsAq2znkpYFQssbZF1Lv+OeqrII7lDfdjzEmPaXf9R5vzP6J4/UfHEiuOqGha+hQiylr/XMCVwlHcBfjSfqg/8VDTHH4AM/FhwJk4tu0AAAAASUVORK5CYII="/>
                          </pattern>
                        </defs>
                        <rect id="arrow_right" width="24" height="44" transform="translate(24 44) rotate(180)" fill="url(#pattern)"/>
                    </svg>
                </div>
                <div class="right arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="44" viewBox="0 0 24 44">
                        <defs>
                          <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 24 44">
                            <image width="24" height="44" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAsCAYAAAB/nHhDAAABgklEQVRYha3Wu07DQBCF4Q+ccAkISIdoA+L9XweoaAkSV9EghcJZ2Jh14vXuaWy5OP/OmRnbDU5xi2O8qqwGlzjDDAe1IQ0+cI7pGnKEl5qAFZ5xsYYcq1hJs752IdXiaqL7FZYdSHFcTeJZN66pgkpSgBBXaPwJDo2sJAUIkCXmCuPqAwQVT9cuQDeumcy4dgFiyBwTmSM8BBDU3ZNB05UD6C7jiQGNzwEESJiuiQGNzwUELW02vhcyFsD/niTjKgF0Icm4SgGpF+TGnpQCguLGb0BqAej5ntQErPDkbz9m2N+vCAj6ju6nk8rmC21MtD8Tj3sVza+1ywfvuINaES0i849gDjUqiGP5PXktwI32rzBpTllEi13mjK8g2dCUxlQQm280NKXcPYinZevJg3IiGhxLrKERxSf/HGrOsAq2znkpYFQssbZF1Lv+OeqrII7lDfdjzEmPaXf9R5vzP6J4/UfHEiuOqGha+hQiylr/XMCVwlHcBfjSfqg/8VDTHH4AM/FhwJk4tu0AAAAASUVORK5CYII="/>
                          </pattern>
                        </defs>
                        <rect id="arrow_right" width="24" height="44" fill="url(#pattern)"/>
                    </svg>
                </div>
            </div>
            <div class="images-wrapper">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/message-1.jpg'?>" alt="message-1">
                </div>
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/message-2.jpg'?>" alt="message-2">
                </div>
                <div class="img-wrapper active">
                    <img src="<?php echo get_template_directory_uri() . '../img/message-3.jpg'?>" alt="message-3">
                </div>
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/message-4.jpg'?>" alt="message-4">
                </div>
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '../img/message-5.jpg'?>" alt="message-5">
                </div>

            </div>
            <div class="testimonial-wrapper">
                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <h3 class="name">John Doe</h3>
                <p class="job h4">CEO Smart Edu</p>
            </div>
        </div>
    </section>
    <section class="blog">
        <header>
            <h2>Blog</h2>
        </header>
        <div class="blog-wrapper-container">
            <div class="blog-wrapper">
                <div class="blog-card">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '../img/blog-img-1.jpg'?>" alt="">
                    </div>
                    <header>
                        <h4 class="blog-title">Education with technologies</h4>
                    </header>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu mod tempor incididunt ut labore et</p>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '../img/blog-img-2.jpg'?>" alt="">
                    </div>
                    <header>
                        <h4 class="blog-title">How to use music in education</h4>
                    </header>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu mod tempor incididunt ut labore et</p>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '../img/blog-img-3.jpg'?>" alt="blog-img">
                    </div>
                    <header>
                        <h4 class="blog-title">Education with technologies</h4>
                    </header>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu mod tempor incididunt ut labore et</p>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '../img/blog-img-4.jpg'?>" alt="">
                    </div>
                    <header>
                        <h4 class="blog-title">Turning goals into reality</h4>
                    </header>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu mod tempor incididunt ut labore et</p>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '../img/blog-img-5.jpg'?>" alt="">
                    </div>
                    <header>
                        <h4 class="blog-title">The nation into education</h4>
                    </header>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu mod tempor incididunt ut labore et</p>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '../img/blog-img-6.jpg'?>" alt="">
                    </div>
                    <header>
                        <h4 class="blog-title">Gamification and learning</h4>
                    </header>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu mod tempor incididunt ut labore et</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="btn-wrapper center">
            <button class="button h4 button--secondary">Read more</button>
        </div>
    </section>
    <section class="subscribe">
        <div class="section-wrapper subscribe-wrapper">
            <p class="h3">Subscribe to our newsletter</p>
            <input type="text">
            <button class="button button--secondary h4">Sign Up</button>
        </div>
    </section>
</div>

 
<?php get_footer();
