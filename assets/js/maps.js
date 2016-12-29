// $('.opacity').on('click',function(){
//     $('.opacity').addClass('visible-map');
// });
$('.show-hide').on('click',function(){
    $('.opacity').toggle();
    $('.cross-line').toggle();
});
function initMap() {
    var myLatlng = new google.maps.LatLng(-20.397, 150.644);
    var myOptions = {
        zoom: 7,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
    var myLat = $('#dbMyLatLng').children();
    var markers = [];
    var id = 25;
    for (var i = 0; i < myLat.length; i++) {
        // var contentString = '<div id="content">'+myLat.eq(i).text().split(',')[2]+'</div>';
        // var infowindow = new google.maps.InfoWindow({
        //     content: contentString
        // });
       // info.push(infowindow);
        var lat_Lng = myLat.eq(i).text().split(',');
        var lat = parseFloat(lat_Lng[0]);
        var lng = parseFloat(lat_Lng[1]);
        var image = '/assets/img/lll.png';
        var marker = new google.maps.Marker({
            draggable: false,
            animation: google.maps.Animation.DROP,
            position: {'lat' : lat, 'lng' : lng},
            title: lat_Lng[2],
            icon:image,
            map: map
        });
        markers.push(marker);
        var info = '<div id="info-wrapp">' +
            '<div><a href="/main/index/'+id+'">jjj</a></div>'+
            '<div class="marker-info">' +
            '<p>'+lat_Lng[2]+'</p>' +
            '<p>'+lat_Lng[2]+'</p>' +
            '<p>'+lat_Lng[2]+'</p>' +
            '</div>'
            '</div>'
        makeInfoWin(marker,info);
        marker.addListener('click', toggleBounce);
    }

    for(var i = 0; i < markers.length; i++){
        var m = markers[i];
        m.addListener('click', function () {
            infowindow.open(map,m);
        });

    }
}


function makeInfoWin(marker, data) {
    var infowindow = new google.maps.InfoWindow({ content: data });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

}
function toggleBounce(){

    if (this.getAnimation() !== null) {
       this.setAnimation(null);
    } else {
        this.setAnimation(google.maps.Animation.BOUNCE);
    }
}
initMap();
function fun(){

    var de = '<a href="http://maps.googleapis.com/maps/api/geocode/json?address=kiev&sensor=false&language=ru">kkkkkkkkk</a>';
    $('#filter').append(de);
}

$('a').on('click',function(e){
    e.preventDefault();
});

