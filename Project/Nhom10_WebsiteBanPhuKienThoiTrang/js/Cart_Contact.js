
function getValue(value, check_need) {
	

	var count_product = document.getElementById("Cart-count").innerHTML;
	count_product = parseInt(count_product) + parseInt(check_need);	
	var sum_money = document.getElementById("Cart-money").innerHTML;
	sum_money = parseInt(sum_money) + parseInt(value)*parseInt(check_need);	
	document.getElementById("Cart-count").innerHTML = count_product;
	document.getElementById("Cart-money").innerHTML = sum_money;
	sessionStorage.setItem("countTotal",JSON.stringify(count_product));
	sessionStorage.setItem("moneyTotal",JSON.stringify(sum_money));

}

function setCookie(value,imgsrc,name) {
  var check = document.body.contains(document.getElementById("needProD"));
  if (!check || check==false) check = 1;
  else check = document.getElementById("needProD").value;

  getValue(value, check);

	
  	var product = imgsrc+"&"+check+"&"+ name + "&" + value; //ảnh + need + name ảnh + giá
  	var fullCart = sessionStorage.getItem("cart_item");
  	if (fullCart==null || fullCart==""|| !fullCart) fullCart="";
  	fullCart = fullCart + "," + product;
  	sessionStorage.setItem("cart_item",fullCart);
  	alert("Success!!");
}


function onLoadCookie(){
	var id = getCookie("user");
	id = id.replace(/\+/g, " ");
	if (id != "XERRORX") document.getElementById("Account").innerHTML = id;
	var count = sessionStorage.getItem("countTotal");
	var money = sessionStorage.getItem("moneyTotal");
	if (!count || count == "") count = 0;
	if (money == "" ||!money ) money = 0;
	document.getElementById("Cart-count").innerHTML = count;
	document.getElementById("Cart-money").innerHTML = money;
	var ShowItem = "";
	var check = document.body.contains(document.getElementById("fullItems"));
	if (check == true || check || check!=false || check !=null){
		var fullCart = sessionStorage.getItem("cart_item");
		if (fullCart){
			var fullItems = fullCart.split(",");

			for (var dem =1; dem <= fullItems.length; dem++){
				if (fullItems[dem-1]){
					var tach = fullItems[dem-1].split("&");
					var need = sessionStorage.getItem("tienTrinh"+dem);
					tach[1] = Math.max(tach[1],need);
					ShowItem += '<tr class="cart_item">';
					ShowItem += '<td class="product-name"><strong class="product-quantity">'+tach[2] +' :x'+tach[1]+'</strong>';
					ShowItem += '</td><td class="product-total"><span class="amount"></span> '+tach[3]*tach[1]+'</td></tr>';
				}
			}
			document.getElementById("fullItems").innerHTML=ShowItem;
			document.getElementById("fullCost").innerHTML = sessionStorage.getItem("moneyTotal");
		}

	}
}

function onLoadTotal(){
	var id = getCookie("user");
	id = id.replace(/\+/g, " ");
	if (id != "XERRORX") document.getElementById("Account").innerHTML = id;
	
	var fullCart = sessionStorage.getItem("cart_item");

	if (fullCart){
	var fullItems = fullCart.split(",");
	// chia code ra làm một chuỗi array, từ đó đem đi cắt tiếp, chuỗi có dạng
	// abx%xyz => abx, xyz (tiến hành cắt tiếp)
	// trong abx có a&b&x => a,b,x
	var ShowItem="";
	var totalMoney = 0;
	var totalCount = 0;
	for (var dem =1; dem <= fullItems.length; dem++){
		if (fullItems[dem-1]){
		var tach = fullItems[dem-1].split("&");

		var need = sessionStorage.getItem("tienTrinh"+dem);

		if (need == null|| !need || need == false) need = tach[1];
		else tach[1] = need;
		totalCount= parseInt(totalCount)+parseInt(need);
		totalMoney = parseInt(totalMoney) + parseInt(tach[1])*parseInt(tach[3]);
		ShowItem+= '<tr class="cart_item" id="cart_pd'+dem+'"><td class="product-remove">';
		ShowItem+= '<a title="Remove this item" class="remove" href="#" onclick="remove_product('+dem+')">×</a>';
		ShowItem+= '</td><td class="product-thumbnail"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="'+tach[0]+'">';
		ShowItem+= '</td><td class="product-name">'+tach[2]+' - x'+tach[1]+'</td>';
		ShowItem+= '<td class="product-price"><span class="amount">'+tach[3]+'</span></td><td class="product-quantity"><div class="quantity buttons_added">';
		ShowItem+= '<input type="button" class="minus" value="-"onclick="DownValue('+dem+',\'value'+dem+'\','+tach[3]+')">';
		ShowItem+= '<input id="changeValue'+dem+'" type="number" size="4" class="input-text qty text" titl	e="Qty" value="'+tach[1]+'" min="0" step="1">';
		ShowItem+= '<input type="button" class="plus" value="+" onclick="UpValue('+dem+',\'value'+dem+'\','+tach[3]+')" >';
		ShowItem+= '</div></td><td class="product-subtotal"><span id="value'+dem+'" class="amount">'+tach[3]*tach[1]+'</span></td></tr>';
		}
	}
	ShowItem+= '<tr><td class="actions" colspan="6"><input type="submit" value="Cập Nhật" name="proceed" class="checkout-button button alt wc-forward"></td></tr>';
	
	document.getElementById("cartItem").innerHTML = ShowItem;
	sessionStorage.setItem("countTotal",totalCount);
	sessionStorage.setItem("moneyTotal",totalMoney);
	document.getElementById("CostTotal").innerHTML = totalMoney;
	}
	else{
		document.getElementById("CostTotal").innerHTML = 0;	
	}
}

function remove_product(idElement) {

	var eLEMENT = document.getElementById("cart_pd"+idElement);
	var fullCart = sessionStorage.getItem("cart_item");
	var items = fullCart.split(",");
	var vitri = parseInt(idElement);
	var check = items[vitri-1].split("&");
	//ảnh + need + name + giá
	items[vitri-1]="";
	var countCart = sessionStorage.getItem("countTotal");
	var giaProd = sessionStorage.getItem("moneyTotal");
	countCart = parseInt(countCart) - parseInt(check[1]);
	giaProd = parseInt(giaProd) - parseInt(check[3])*parseInt(check[1]);
	sessionStorage.setItem("countTotal",parseInt(countCart));
	sessionStorage.setItem("moneyTotal",parseInt(giaProd));
	var str = items.toString();
	eLEMENT.innerHTML = "";
	sessionStorage.setItem("cart_item",str);
	sessionStorage.removeItem("tienTrinh"+dem);

	
}
function UpValue(id,idElement,giaTien) {
	var value = document.getElementById("changeValue"+id).value;
	if (value >=0){
		value++;

		sessionStorage.setItem("tienTrinh"+id,JSON.stringify(value));
		document.getElementById("changeValue"+id).value = value;
		value = value*giaTien;
		document.getElementById(idElement).innerHTML=value;

		


	}
}
function DownValue(id,idElement,giaTien) {
	var value = document.getElementById("changeValue"+id).value;

	if (value > 0){

		value--;
		sessionStorage.setItem("tienTrinh"+id,JSON.stringify(value));
		document.getElementById("changeValue"+id).value = value;
		
		document.getElementById(idElement).innerHTML=value*giaTien;
		
		


	}
}


function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "XERRORX";
}


