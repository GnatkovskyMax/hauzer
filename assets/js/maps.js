// $('.opacity').on('click',function(){
//     $('.opacity').addClass('visible-map');
// });
$('.show-hide').on('click',function(){
    $('.opacity').toggle();
    $('.cross-line').toggle();
});
$(window).on('load',
function() {
    var myLatlng = new google.maps.LatLng(50.501806, 30.610601);
    var myOptions = {
        zoom: 11,
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
            '<div><a href="/manual/object/'+lat_Lng[2]+'">jjj</a></div>'+
            '<div class="marker-info">' +
            '<img src="'+lat_Lng[3]+'">' +
            '<p>'+lat_Lng[4]+'</p>' +
            '<p>'+lat_Lng[5]+'</p>' +
            '<p>'+lat_Lng[6]+'hh</p>' +
            '<p>'+lat_Lng[7]+'hh</p>' +
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
});


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
function mapHeight(){
    if($('#catalog-info').height()<=200){
 $('#map').height(200);
    }else{
        $('#map').height($('#catalog-info').height());
    }
}
if($('section').is($('#catalog-info'))){
    mapHeight();
}

