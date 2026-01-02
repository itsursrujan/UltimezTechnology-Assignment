const r=require("express").Router();
const v=require("../middleware/validate");
const {registerUser}=require("../controllers/authController");
r.post("/register",v,registerUser);
module.exports=r;