const pyramidArr = (arr) => {
  let hello = [];
  for (let i = 0; i < arr.length; i++) {
    hello = [...hello, arr[i]];
    console.log(hello)
  }
}
pyramidArr(["hello", "hello", "hello", "hello", "hello"]);

const pyramidStr = (n) => {
  let hello = "hello";
  for (let i = 0; i < n; i++) {
    hello += " hello";
    console.log(hello)
  }
}
pyramidStr(5);

// const missing_num = (arr) => {
//   for (let i = 0; i < arr.length; i++) {
//     if (arr[i] !== i) {
//       console.log(i)
//       break;
//     }
//   }
// }
// missing_num([0, 1, 2, 4, 5, 6])

// let target = 7;

// let sum = (arr) => {
  
// }

// let n = 0;
// const pyramidSubset = (arr) => {
//   let hello =  [];
//   hello = [arr[n]];
//   n++;
//   hello.forEach((h, i) => {
//     if (h !== target && i == arr.length - 1) {
//       pyramidSubset(arr)
//     } else {
//       return "false"
//     }
//   })
//   return hello;
// }
// let new_arr = pyramidSubset([1, 2, 3, 4, 5]);
// console.log(new_arr)