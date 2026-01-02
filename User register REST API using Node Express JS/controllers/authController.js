const User=require("../models/User");
const bcrypt=require("bcryptjs");
exports.registerUser=async(req,res)=>{
  const {fullName,username,email,phoneNumber,password}=req.body;
  const hash=await bcrypt.hash(password,10);
  const user=await User.create({fullName,username,email,phoneNumber,password:hash});
  res.json({message:"User Registered",user});
};