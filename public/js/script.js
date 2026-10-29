const systemFeatures=[
 {icon:"fas fa-users",title:"کاروونکي",desc:"پیرودونکي، شرکتونه او مدیران"},
 {icon:"fas fa-bullseye",title:"هدف",desc:"د محصولاتو اسانه پېژندنه او لاسرسی"},
 {icon:"fas fa-globe",title:"سکوپ",desc:"وېب‌سایټ له هر ځایه د لاسرسي وړ دی"}
];
const features=[
 {icon:"fas fa-oil-can",title:"لوړ کیفیت",desc:"د نړیوالو معیارونو مطابق تولید"},
 {icon:"fas fa-gears",title:"دوامداره کارکردګي",desc:"ماشینونه د اوږدې مودې لپاره ساتي"},
 {icon:"fas fa-leaf",title:"چاپېریال ساتنه",desc:"د چاپېریال دوستانه تولید ته ژمن یو"},
 {icon:"fas fa-truck",title:"پر وخت تحویلي",desc:"محصولات په ټاکلي وخت رسېږي"}
];
const faqs=[
 {q:"آیا ستاسو محصولات لوړ کیفیت لري؟",a:"هو، زموږ ټول محصولات د نړیوالو معیارونو مطابق جوړ شوي دي."},
 {q:"آیا تاسو صنعتي شرکتونو ته خدمات وړاندې کوئ؟",a:"هو، موږ د فابریکو او صنعتي شرکتونو لپاره مناسب حل لارې لرو."},
 {q:"څنګه د مناسب محصول په اړه پوښتنه وکړم؟",a:"د اړیکو له پاڼې زموږ له ټیم سره اړیکه ونیسئ."}
];
function renderCards(id,entries){
 const box=document.getElementById(id);if(!box)return;
 entries.forEach((item)=>{
  const card=document.createElement("article");card.className="feature-card";
  const icon=document.createElement("i");icon.className=item.icon;icon.setAttribute("aria-hidden","true");
  const heading=document.createElement("h3");heading.textContent=item.title;
  const text=document.createElement("p");text.textContent=item.desc;
  card.append(icon,heading,text);box.append(card);
 });
}
async function renderTestimonials(){
 const box=document.getElementById("testimonialContainer");if(!box)return;
 try{
  const response=await fetch("/dataJson/testimonials.json");
  if(!response.ok)throw new Error("Testimonials could not be loaded");
  const people=await response.json();
  people.forEach((person)=>{
   const card=document.createElement("article");card.className="testimonial-card";
   const image=document.createElement("img");
   image.src=(person.img||"").replace(/^\.\/assets\/images\//,"/images/")||"/images/hafiz.jpg";
   image.alt="";image.className="avatar";image.loading="lazy";
   const quote=document.createElement("p");quote.textContent=person.text||"";
   const name=document.createElement("h4");name.textContent=person.name||"";
   const role=document.createElement("span");role.textContent=person.role||"";
   card.append(image,quote,name,role);box.append(card);
  });
 }catch(error){console.error("Testimonial loading error:",error);}
}
function renderFaqs(){
 const box=document.querySelector(".faq .container");if(!box)return;
 faqs.forEach((faq,index)=>{
  const item=document.createElement("div");item.className="faq-item";
  const toggle=document.createElement("input");toggle.type="checkbox";toggle.id="faq-"+index;
  const label=document.createElement("label");label.htmlFor=toggle.id;label.textContent=faq.q;
  const answer=document.createElement("p");answer.textContent=faq.a;
  item.append(toggle,label,answer);box.append(item);
 });
}
document.addEventListener("DOMContentLoaded",()=>{
 renderCards("systemFeatures",systemFeatures);
 renderCards("featuresContainer",features);
 renderTestimonials();renderFaqs();
 const toggle=document.getElementById("menu-toggle");
 document.querySelectorAll(".header-menu a").forEach((link)=>{
  link.addEventListener("click",()=>{if(toggle)toggle.checked=false;});
 });
});