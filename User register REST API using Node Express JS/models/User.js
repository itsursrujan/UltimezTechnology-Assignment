const mongoose = require("mongoose");
const schema = new mongoose.Schema({
  _id:{type:Number,auto:true},
  fullName:String,
  username:String,
  email:String,
  phoneNumber:String,
  password:String,
  loginStatus:{type:Boolean,default:true}
},{timestamps:{createdAt:"dateInTime"}});
module.exports = mongoose.model("User",schema);