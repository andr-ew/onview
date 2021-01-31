import * as THREE from 'https://saiconview.com/wp-content/themes/onview/three/build/three.module.js';
import { controls } from 'https://saiconview.com/wp-content/themes/onview/controls.js';
import { screen } from 'https://saiconview.com/wp-content/themes/onview/screen.js';
import { lookAtExt } from 'https://saiconview.com/wp-content/themes/onview/lookat.js';
import { css } from 'https://saiconview.com/wp-content/themes/onview/css.js';

window.mobileAndTabletCheck = function() {
    let check = false;
    (function(a)        {if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|4p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
};

var app = {}

let bigasync = function() {

app.mobile = window.mobileAndTabletCheck();
// window.url = $("body").attr("data-url");
//window.home = $("body").attr("data-home");
window.url = "https://saiconview.com/wp-content/themes/onview";
window.home ="https://saiconview.com";

// var THREE = import('https://saiconview.com/wp-content/themes/onview/three/build/three.module.js');
// var { controls } = import('https://saiconview.com/wp-content/themes/onview/controls.js');
// var { screen } = import('https://saiconview.com/wp-content/themes/onview/screen.js');
// var { lookAtExt }  = import('https://saiconview.com/wp-content/themes/onview/lookat.js');
// var { css }  = import('https://saiconview.com/wp-content/themes/onview/css.js');

var multiple = true;

app.THREE = THREE;
app.css = css;
window.css = css;

app.init = function() {


    app.container = document.getElementById( 'container' );

    app.scene = new app.THREE.Scene();
    app.scene.background = new app.THREE.Color(0xffffff);
    app.camera = new app.THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 2000);
//    app.camera.position.z = 30;
    app.camera.target = new app.THREE.Vector3( 0, 0, 0 );
    app.camera.tween = new TWEEN.Tween(app.camera.target);
    window.camera = app.camera;
    app.camera.lookAt = lookAtExt(app);

    app.renderer = new app.THREE.WebGLRenderer({ antialias: true, powerPreference: "low-power", alpha: true });
    app.renderer.setClearColor( 0xffffff, 0);
   // app.renderer.setClearAlpha(0.1);

    app.scene.background = null;

    app.renderer.setPixelRatio(window.devicePixelRatio ? window.devicePixelRatio : 1);
    app.renderer.setSize( window.innerWidth, window.innerHeight );
    window.renderer = app.renderer

    app.nav = screen.nav;

    controls.init(app);
    css.init(app);

    app.controls = controls;

    app.container.appendChild( app.renderer.domElement );

    if(multiple) {
        app.nav.homescreen = new screen.Homescreen(app);
        app.nav.location = app.nav.homescreen;
    } else {
        app.nav.homescreen = new screen.Artisthomescreen(app);
        app.nav.location = app.nav.homescreen;
    }

    console.log("init");

}

function animate() {
    requestAnimationFrame( animate );

    controls.update(app);
//                app.homescreen.update(1/60);

    app.renderer.render( app.scene, app.camera );
    css.render(app);

    TWEEN.update();
}

window.animate = animate;
window.app = app;

app.loading = {
    size: 0,
    progress: 0,
    update: function(prog) {
        this.progress += prog;

        console.log("Loading: " + this.progress + " / " + this.size);

        $("#startButton").html("Loading: " + Math.round(this.progress / this.size * 100) + "%");

        //BUG: sometimes this triggers early!
        if(this.progress >= this.size) {
            var overlay = document.getElementById( 'overlay' );
            if(overlay) overlay.remove();

            css.youtubeBump();
        }
    }
}

app.data = { rooms: [] }

$('.gallery-data .room').each(function(i) {
    app.data.rooms[i] = {
        name: $(this).attr('data-name'),
        id:  $(this).attr('data-id')
    }
    let room = app.data.rooms[i];

    if($(this).hasClass('single')) {
        multiple = false;
    } else {
        $(this).find(".cover").each(function() {
            room.cover = {
                file: $(this).attr('data-file'),
                type: $(this).attr('data-type'),
                title: $(this).attr('data-title'),
                link:  $(this).attr('data-link')
            }
            app.loading.size++;
        });
    }

    $(this).find(".works").each(function() {
        room.work = [];

        $(this).find(".work").each(function(i) {
            room.work[i] = {
                file: $(this).attr('data-file'),
                type: $(this).attr('data-type'),
                title: $(this).attr('data-title'),
                link:  $(this).attr('data-link')
            }
            // app.loading.size++;
        });
    });
});

app.loading.size = $(".meta").attr('data-size')

console.log(app.data);

$("#startButton").removeClass("hidden");

if(app.mobile) {
    app.startButton = document.getElementById( 'startButton' );

    app.startButton.addEventListener( 'click', function () {
        $("#startButton").html("Loading: 0%");
        app.init();
        animate();
    }, false );
} else {
    $("#startButton").html("Loading: 0%");
    app.init();
    animate();
}

}

bigasync();
//$(bigasync);
