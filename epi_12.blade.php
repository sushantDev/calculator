<html class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Episode 12</title>
    <link rel="stylesheet" href="css/bulma.css"/>
    <style>
        body {
            padding: 2em;
        }
    </style>
</head>
<body>

    <div id="app" class="container">
        <coupon v-on:applied="onCouponApplied"></coupon>
        <h1 v-if="couponApplied">Congrats!! You used the coupon.</h1>
    </div>

<script src="vue/vue.js"></script>
<script>
    Vue.component('coupon', {
        template: `<input placeholder="Enter your coupon code" @blur="onCouponApplied">`,
        methods: {
            onCouponApplied() {
                this.$emit('applied');
            }
        }
    });

    new Vue ({
       el: '#app',
        data: {
            couponApplied: false
        },
        methods: {
            onCouponApplied(){
                this.couponApplied = true;
            }
        }
    });
</script>
</body>
</html>