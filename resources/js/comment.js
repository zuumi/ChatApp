$(function() {
  get_data();
});

// // ajaxの基本形
// $.ajax({
//   // web.app(routingしたURLを指定する)
//   url: "result/ajax",
//   dataType: "json",
//   success: data=> {
//     // 成功時の処理
//   }
//   error: () => {
//     // エラー時の処理
//   }
// })

function get_data() {
  $.ajax({
    url:"result/ajax/",
    dataType:"json",
    success:data =>{
      console.log(data);
    },
    error:()=>{
      alert("ajax Error");
    }
  });

  setTimeout("get_data()",5000);
}
