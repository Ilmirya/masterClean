var app = angular.module('myApp', []);
app.controller('mainCtrl', function($scope) {
	var model ={
		isPic: true,
		isNotPhone: true
	};
	model.isNotPhone = document.documentElement.clientWidth > 565;
	var arrSales = [
		{name:"Химчистка дивана: 2 посадочных места", cost: 1100},
		{name:"Химчистка дивана: 3 посадочных места", cost: 1400},
		{name:"Химчистка полутороспального матраса: c двух сторон", cost: 1300},
		{name:"Химчистка углового дивана: 2 посадочных места + угол", cost: 1600},
		{name:"Химчистка кресла", cost: 500},
		{name:"Химчистка дивана: 3 посадочных места", cost: 1400},
		{name:"Химчистка односпального матраса: c двух сторон", cost: 900},
		{name:"Химчистка дивана: 2 посадочных места", cost: 1600},
		{name:"Химчистка полутороспального матраса: c двух сторон", cost: 1300},
		{name:"Химчистка двуспального матраса: c двух сторон", cost: 1600}
	];
	var ind = new Date().getDate() % 10;
	$scope.sale = arrSales[ind];

  	$scope.ShowPic = function(){
  		model.isPic = true;
  	};
  	$scope.ShowTable = function(){
  		model.isPic = false;
  	};
	$scope.model = model;
  	$scope.lastName= "Doe";

	//Переменная для включения/отключения индикатора загрузки
	var spinner = $('.ymap-container').children('.loader');
	//Переменная для определения была ли хоть раз загружена Яндекс.Карта (чтобы избежать повторной загрузки при наведении)
	var check_if_load = false;
	 
	function init() {
	    var myMap = new ymaps.Map("map", {
	            center: [54.6976, 55.98],
	            zoom: 15
	        }, {
	        	searchControlProvider: 'yandex#search'
	        });

	    myMap.geoObjects 
	        .add(new ymaps.Placemark([54.6976,55.9806], {
		        // Содержимое балуна.
		        balloonContentHeader: 'г. Уфа, ул. Загира Исмагилова, д. 17',
		        balloonContentBody: 'г. Уфа, ул. Загира Исмагилова, д. 17',
		        balloonContentFooter: 'MasterClean102'
	        }, {
	            preset: 'islands#icon',
	            iconColor: '#1D6887'
	        }));

	  	// Получаем первый экземпляр коллекции слоев, потом первый слой коллекции
	 	var layer = myMap.layers.get(0).get(0);
	 	waitForTilesLoad(layer).then(function() {
		    // Скрываем индикатор загрузки после полной загрузки карты
		    spinner.removeClass('is-active');
		  });
	}

	 
	// Функция для определения полной загрузки карты (на самом деле проверяется загрузка тайлов) 
	function waitForTilesLoad(layer) {
	  return new ymaps.vow.Promise(function (resolve, reject) {
	    var tc = getTileContainer(layer), readyAll = true;
	    tc.tiles.each(function (tile, number) {
	      if (!tile.isReady()) {
	        readyAll = false;
	      }
	    });
	    if (readyAll) {
	      resolve();
	    } else {
	      tc.events.once("ready", function() {
	        resolve();
	      });
	    }
	  });
	}
	 
	function getTileContainer(layer) {
	  for (var k in layer) {
	    if (layer.hasOwnProperty(k)) {
	      if (
	        layer[k] instanceof ymaps.layer.tileContainer.CanvasContainer
	        || layer[k] instanceof ymaps.layer.tileContainer.DomContainer
	      ) {
	        return layer[k];
	      }
	    }
	  }
	  return null;
	}
	 
	// Функция загрузки API Яндекс.Карт по требованию (в нашем случае при наведении)
	function loadScript(url, callback){
	  var script = document.createElement("script");
	 
	  if (script.readyState){  // IE
	    script.onreadystatechange = function(){
	      if (script.readyState == "loaded" ||
	              script.readyState == "complete"){
	        script.onreadystatechange = null;
	        callback();
	      }
	    };
	  } else {  // Другие браузеры
	    script.onload = function(){
	      callback();
	    };
	  }
	 
	  script.src = url;
	  document.getElementsByTagName("head")[0].appendChild(script);
	}
 
	// Основная функция, которая проверяет когда мы навели на блок с классом &#34;ymap-container&#34;
	var ymap1 = function() {
	  $('.ymap-container').mouseenter(function(){
	      if (!check_if_load) { // проверяем первый ли раз загружается Яндекс.Карта, если да, то загружаем
	 
		  	// Чтобы не было повторной загрузки карты, мы изменяем значение переменной
	        check_if_load = true; 
	 
			// Показываем индикатор загрузки до тех пор, пока карта не загрузится
	        spinner.addClass('is-active');
	 
			// Загружаем API Яндекс.Карт
	        loadScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=ca891a61-e46a-45cf-908c-776288c3b917;loadByRequire=1", function(){
	           // Как только API Яндекс.Карт загрузились, сразу формируем карту и помещаем в блок с идентификатором &#34;map-yandex&#34;
	           ymaps.load(init);
				//ymaps.ready(init);
	        });                
	      }
	    }
	  );  
	}
	 
	ymap1();
	

});
function showTime(){
	    var date = new Date();
	    var h = 23 - date.getHours(); // 0 - 23
	    var m = 59 - date.getMinutes(); // 0 - 59
	    var s = 59 - date.getSeconds(); // 0 - 59
	    
	    h = (h < 10) ? "0" + h : h;
	    m = (m < 10) ? "0" + m : m;
	    s = (s < 10) ? "0" + s : s;
	    var time = h + ":" + m + ":" + s;
	    document.getElementById("TimerDisplay").innerText = time;
	    document.getElementById("TimerDisplay").textContent = time;
	    
	    setTimeout(showTime, 1000);
	}

showTime();

$(function(){
	$("#phone").mask("8(999) 999-99-99");

	$("form" ).submit(function(event) {
		event.preventDefault();
		//alert($(this).attr('action'));
	 	
	 	$.ajax({
	 		type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
		  	success: function(result){
		    	alert(result);
		  	}
		});
		
	});
});
	


