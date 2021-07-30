@props(['scale' => 1])
<div
    style="display:flex;flex-direction:row;align-items:center;justify-content:center;height:calc(32px * {{ $scale }});width:calc(48px * {{ $scale }});border:4px solid #18191F">
    <div style="display:flex;flex:1;background-color:#474A57;height:100%"></div>
    <div style="display:flex;flex:2;border-left:4px solid #18191F;background-color:#ffffff;height:100%"></div>
</div>
