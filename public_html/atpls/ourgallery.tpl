
{include file="header.tpl"}
{*include file="slider.tpl"*}


<section class="section gray">
    <div class="w-container">
      <div class="top-title">
        <div class="title-txt">
        <h2>Our Gallery</h2>
        </div>
        <div class="divider"></div>
        <div class="w-col-12">
        <div class="w-col-12">
           <!---------------------------------our Gallery-------------------------------->
			<div class="container">
		
			
		<div class="main">
			<div class="gamma-container gamma-loading" id="gamma-container">

				<ul class="gamma-gallery">
					{section name=q loop=$gallery}	
						<li>
							<div data-alt="img03" data-description="<h3>{$gallery[q].title}</h3>" data-max-width="1800" data-max-height="1350">
								<div data-src="{$gallery[q].image}" data-min-width="1300"></div>
								<div data-src="{$gallery[q].image}" data-min-width="1000"></div>
								<div data-src="{$gallery[q].image}" data-min-width="700"></div>
								<div data-src="{$gallery[q].image}" data-min-width="300"></div>
								<div data-src="{$gallery[q].image}" data-min-width="200"></div>
								<div data-src="{$gallery[q].image}" data-min-width="140"></div>
								<div data-src="{$gallery[q].image}"></div>
								<noscript>
									<img src="{$gallery[q].image}" alt="img03"/>
								</noscript>
							</div>
						</li>
					{/section}	
					
				</ul>

			<div class="gamma-overlay"></div>

		</div>

			</div><!--/main-->
		</div>
		   <!-----------------------------------our Gallery End---------------------------->
      </div>
      <div>
      </div>
     </div> 
    </section>
               
               




{include file="footer.tpl"}