import{S as u}from"./Checkmark.881c08fd.js";import{r as d,o as m,c as _,e as r,a as s,I as l,d as f,J as c,H as g}from"./vue.runtime.esm-bundler.c7867100.js";import{_ as p}from"./_plugin-vue_export-helper.8da217d5.js";const b={components:{SvgCheckmark:u},props:{modelValue:Boolean,name:String,labelClass:{type:String,default(){return""}},inputClass:{type:String,default(){return""}},id:String,size:String,disabled:Boolean,round:Boolean,type:{type:String,default(){return"blue"}}},methods:{labelToggle(){this.$refs.input.click()}}},k=["onClick"],y={class:"form-checkbox-wrapper"},h={class:"form-checkbox"},x=["checked","name","id","disabled"];function C(o,n,e,S,B,a){const i=d("svg-checkmark");return m(),_("label",{class:l(["aioseo-checkbox",[e.labelClass,{[e.size]:e.size},{disabled:e.disabled},{round:e.round}]]),onKeydown:[n[1]||(n[1]=c((...t)=>a.labelToggle&&a.labelToggle(...t),["enter"])),n[2]||(n[2]=c((...t)=>a.labelToggle&&a.labelToggle(...t),["space"]))],onClick:g(()=>{},["stop"])},[r(o.$slots,"header"),s("span",y,[s("span",h,[s("input",{type:"checkbox",onInput:n[0]||(n[0]=t=>o.$emit("update:modelValue",t.target.checked)),checked:e.modelValue,name:e.name,id:e.id,class:l(e.inputClass),disabled:e.disabled,ref:"input"},null,42,x),s("span",{class:l(["fancy-checkbox",e.type])},[f(i)],2)])]),r(o.$slots,"default")],42,k)}const w=p(b,[["render",C]]);export{w as B};
