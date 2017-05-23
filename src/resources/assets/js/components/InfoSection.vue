<template>
	<div class="info aside section">

		<loading v-if="fetching_attrs" ></loading>

        <div v-else class="section-inner">

            <section-icon icon="address-card" ></section-icon>

            <h2 class="heading sr-only">Información Básica</h2>
            <div class="content">
                <ul class="list-unstyled">

                    <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>{{location}}</li>
                    <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span>
                    	<a :href="'mailto:'+email">{{email}}</a>
                	</li>
                    <li><i class="fa fa-list"></i><span class="sr-only">Portfolio:</span>
                        <a data-toggle="modal" data-target="#portfolio" href="/portfolio">Portfolio completo</a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</template>

<script>
    module.exports = {
        props: ['fetching_attrs','location', 'email']
	}

</script>