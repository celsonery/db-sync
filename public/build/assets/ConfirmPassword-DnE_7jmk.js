import{T as m,o as d,c as l,w as t,a as e,u as a,Z as c,b as o,d as u,n as p,e as f}from"./app-DUsG979t.js";import{_}from"./GuestLayout-CS1y66V-.js";import{_ as w,a as b,b as x}from"./TextInput-CmNOb5Mh.js";import{P as g}from"./PrimaryButton-C_-DOlTM.js";import"./ApplicationLogo-DGQoaczW.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const h=o("div",{class:"mb-4 text-sm text-gray-600 dark:text-gray-400"}," Esta é uma área segura. Por favor confirme sua senha antes de continuar. ",-1),v={class:"flex justify-end mt-4"},S={__name:"ConfirmPassword",setup(y){const s=m({password:""}),n=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(V,r)=>(d(),l(_,null,{default:t(()=>[e(a(c),{title:"Confirmar senha"}),h,o("form",{onSubmit:f(n,["prevent"])},[o("div",null,[e(w,{for:"password",value:"Senha"}),e(b,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:a(s).password,"onUpdate:modelValue":r[0]||(r[0]=i=>a(s).password=i),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),e(x,{class:"mt-2",message:a(s).errors.password},null,8,["message"])]),o("div",v,[e(g,{class:p(["ms-4",{"opacity-25":a(s).processing}]),disabled:a(s).processing},{default:t(()=>[u(" Confirmar ")]),_:1},8,["class","disabled"])])],32)]),_:1}))}};export{S as default};
