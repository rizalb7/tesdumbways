cetak_gambar = (num) =>{
for (var i = 1; i <= num; i++) {
	var result = '';
  var x = Math.ceil(num / 2);
	for (var j = 1; j <= num; j++) {
    if (j==1||j==num){
      result += ('*');
    }
    else if(i==x){
      result += ('*');
    }
    else{
      result += ('=');
    }
	}
	console.log(result);
 }
}
cetak_gambar(5);