@extends('master.master')
@section('title', 'Copy Trade Policy')
@section('content')

<div class="uk-section  uk-background-cover"  style="background-image: url('../img/blockit/bg-01.png');">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge2 uk-padding uk-text-white uk-margin-remove-bottom uk-visible@m">Copy Trading Terms & Conditions </h1>
                <h1 class="uk-text-superlarge1 uk-text-white uk-margin-remove-bottom uk-hidden@m">Copy Trading Terms & Conditions </h1>
            </div>
        </div>
    </div>
</div>


<!----Description------------------>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-1@m"  >
                <h2>Copy Trading Terms and Conditions</h2>
                <p class="uk-text-justify uk-text-grey uk-text-default">For client protection and satisfaction, you should take time to carefully read this Agreement as well as any other 
                    policies, additional documents and information available to you through our website prior to opening a trading account with us. By default, you must read, agree and 
                    accept all the General terms and conditions set out below, and any additional documents incorporated herein by reference before you establish a Business relationship 
                    with us (without modifications).
                </p>
                <p class="uk-text-justify">
                    If you have objections to any of these general terms and conditions, or any part thereof, and/or if you do not agree to be bound by these general terms and conditions, or any 	
                    part thereof, do not access and/or use our online trading facility in any way and inform us in writing immediately.
                </p>
                <p class="uk-text-justify">
                    By accepting this Agreement, you agree to be bound by these terms and conditions and our Terms of Business (including any schedules, annexes, exhibits, amendments and/or 
                    side agreements, if any) that apply to your account and are always subject to any 	applicable laws. In the event of any conflicts or inconsistency between our Terms of Business 
                    and these Terms and Conditions, our Terms of Business shall prevail.
                </p>
            </div>
            <div class="uk-width-1-1@m" id="disclaimer">
                <h3>Copy Trading Disclaimer</h3>
                <p class="uk-text-justify uk-text-grey uk-text-default">Copy Trading is a product of the social trading community which is defined as clients’ willingness to share intelligence 
                    and expertise, including sharing of trading strategies and 	real time flow of trades, carried out on the basis of individual client choices or effected through the automated 
                    c-copy tool (“CopyTrading Services” or “CopyTrade”).
                </p>
                <p p class="uk-text-justify">
                   Our copy trading features include but are not limited to our community, "c-copy", which is a technical solution integrated with Metatrader 5, and MetaTrader 5 (MT5) is a 
                    multi-asset trading platform by MetaQuotes.
                </p>
                <p p class="uk-text-justify">
                   In the event, you decide to use our CopyTrading services, we will provide you with investment management services. This means that transactions will automatically be 	
                   opened in your Account on your behalf with respect to the amount copying such a 	portfolio once initiated by the copied account, portfolio, and/or strategy. The opening of
                   such transactions shall not require any prior consultation, consent, or approval. While we 	are permitted under our licence to provide investment advice services, we do not
                    provide investment advice, nor provide any personalised investment recommendations and/or 	advice to you on the merits of any investments, either with respect to our 
                    Copy Trading services or any service.
                 </p>
            </div>
         
        </div>
    </div>
</div>
<!----End of Description---------->

<!-----------list of articles---------->

<div class="uk-section uk-margin-top">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="in-blog-1" data-uk-grid>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded" >
                              
                                <div class="uk-card-body toggle-text"  id="sustain"> 
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">Suitability to Use Copy Trading Services</a>
                                    </h3>
                                    <p class="uk-text-justify uk-text-meta">By using our CopyTrading services, you agree to the terms of our portfolio management service. </p>
                                    <p class="hidden uk-text-justify uk-text-meta">
                                        You have considered your entire financial situation, including financial commitments, in 	making the decision to copy a specific trader or traders, strategy, and/or portfolio, 
                                        and you understand that using CopyTrading is highly speculative and that you could sustain 	significant losses, although not exceeding the amount used to copy a trader or traders.
                                    </p>
                                    <p class=" uk-text-justify hidden uk-text-meta">CopyTrading does not constitute the same as providing investment advice. Your 	investments could increase or decrease in value.</p>
                                    <p class="hidden uk-text-justify uk-text-meta">CopyTrading allows you to copy other traders whose profiles are public, with some restrictions. More information on how to set up your strategy will be accessible once your account is qualified for CopyTrading.</p>
                                   
                                </div>
                                <div class="uk-card-footer uk-clearfix">

                                    <div class="uk-float-right">
                                        <a href="#" onclick="toggleVisibility(this)" class="uk-button uk-button-text uk-text-primary">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded">
                              
                                <div class="uk-card-body toggle-text"  id="consent">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">Consent and Acknowledgment by Clients to Associated Risks</a>
                                    </h3>
                                    <p class="uk-text-justify uk-text-meta">Without limit to the generality of the foregoing, You have reviewed, consented to, and 	understand the risks associated with CopyTrading, as more fully described herein and/or in Section 6, including, but not limited to, automated trading execution, in which trades a	re opened and closed in your account without your manual intervention.
                                    </p>
                                    <p class="hidden uk-text-justify uk-text-meta">
                                        You further authorise us to execute any and all transactions and/or positions undertaken by the trader, account, portfolio and/or strategy you chose to CopyTrade, including without limitation, CopyTrading, stop 
                                        Copytrading and/or pause CopyTrading another trader, account, portfolio and/or strategy and setting limits to any position (including copy position). These actions are done automatically once initiated by you and do not 
                                        require any prior consultation, consent, or approval of ongoing activity/copied trades.
                                    </p>
                                    <p class=" uk-text-justify hidden uk-text-meta">You hereby confirm that you acknowledge that you can cease, suspend, restrict, and/or limit any CopyTrading activity done by you using our platforms at any time, at your sole 	discretion. You are fully responsible at all times for monitoring, selecting, and assessing: (i) 	the suitability of the strategy provider or copied accounts; and (ii) the overall success of 	the copied trader, account, portfolio, and/or strategy.
                                    </p>
                                    <p class="hidden uk-text-justify uk-text-meta">We shall continue to use appropriate measures to monitor the performance of any 	copied trader, account, portfolio, or strategy against parameters established by it, which 	may include 	risk behaviour, profitability, drawdown, and any other parameters deemed 	relevant by us, and to suspend and/or block any trader, account, portfolio, or strategy 	from being copied. We reserve the right, at our sole and absolute discretion, to halt, copy, 	or cease copying any trader, account, portfolio, and/or strategy.</p>
                                    <p class="hidden uk-text-justify uk-text-meta">Without prejudice to the extent of Section 5 below, our offering of CopyTrading services 	does not constitute investment, tax, or other financial advice. You engage in the 	CopyTrading features at your own risk, and the company, its affiliates, employees, Clients, 	and agents will not be liable for any losses you incur as a result of doing so.</p>
                                    <p class="hidden uk-text-justify uk-text-meta">We, nor any copied trader, account, portfolio, or strategy, provide any guarantee about 	the 	future performance of your Account, any specific level of performance, the success 	of any investment strategy, or the success of our overall management of the Account. 	Investment strategies are subject to various market, currency, economic, political, and 	business risks. Investment decisions may not be beneficial, and you may lose the entire 	amount invested. Past performance does not guarantee or predict future performance.</p>
                                </div>
                                <div class="uk-card-footer uk-clearfix">

                                    <div class="uk-float-right">
                                        <a href="#" onclick="toggleVisibility(this)" class="uk-button uk-button-text uk-text-primary">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        
                        <div class="in-stretch" >
                            <article class="uk-card uk-card-default uk-border-rounded">
                              
                                <div class="uk-card-body toggle-text" id="terms">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">Copytrading Terms </a>
                                    </h3>
                                    <p class="uk-text-justify uk-text-meta">You should note that We and our affiliates may take the same or similar positions in 	specific investments for our other Clients and our own accounts as we do for you, or We 	or our affiliates or other customers may open trades in an opposite direction to You. We 	have no obligation to purchase or sell, or to recommend for purchase or sale in your 	Account, any security which we or our Affiliates may purchase or sell for our other Clients 	and our own accounts. You should further note that we may elect to remunerate our 	copied traders.
                                    </p>
                                    <p class="hidden  uk-text-justify uk-text-meta">
                                        To the maximum extent permissible under the applicable law, neither we nor any of our affiliates will be liable for (a) any loss arising from adhering to your written or oral 	instructions, (b) any loss that you may suffer by reason of any decision made or other 	action taken by an account elected to be copied by You, or (c) specifically any loss arising 	from any investment decision made or other action taken or omitted in good faith by any 	copied account, strategy and/or a portfolio. Nothing in these Terms and Conditions will 	waive or limit any rights that you may have under any applicable laws which may not be 	waived or limited. 
                                    </p>
                                    <p class=" uk-text-justify hidden uk-text-meta">When using our CopyTrading services, We will provide you with investment management 	services. This means that transactions will automatically open in your Account on your 	behalf with respect to the amount copying such a portfolio once initiated by the copied account, portfolio, and/or strategy. The opening of such transactions shall not require any 	prior consultation, consent, or approval.
                                    </p>
                                    <p class="hidden uk-text-justify uk-text-meta"> You are permitted to store, display, analyse, modify, and print the information made 	available through the Trading Platform. However, a Client is not permitted to publish, 	transmit, or otherwise reproduce that information, in whole or in part, in any format to 	any third party without or consent. Therefore, Clients may not alter, obscure, or remove 	any copyright, trademark, or any other notices that are provided on the Trading platform 	or on our website.
                                    </p>
                                    <p class="hidden uk-text-justify uk-text-meta">Trading with Lucky Ant Trading by following the trades/strategy of other traders is 	associated with a high range of risks. Such risks may include the risk of copying the 	trading decisions of inexperienced/unskilled traders or traders whose ultimate goal or 	financial status may vary from yours. Before making the decision to copy a trader/strategy, 	you should consider your financial situation and conduct your personal assessment of the 	specific trader.
                                    </p>
                                    <p class="hidden uk-text-justify uk-text-meta">Past performance of Lucky Ant Trading community members, even of top-performing 	traders, 	is not indicative of future performance. Lucky Ant Trading does not guarantee 	that your account’s performance, including any potential profits or losses, is likely to be similar to the trades/strategies you are copying. We are also unable to guarantee that the 	risk score of a trader will mirror the risk of their future performance.
                                    </p>
                                    
                                </div>
                                <div class="uk-card-footer uk-clearfix">
  
                                    <div class="uk-float-right">
                                        <a href="#" onclick="toggleVisibility(this)" class="uk-button uk-button-text uk-text-primary">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded">
                              
                                <div class="uk-card-body toggle-text"  id="fees">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">Fees and Charges Associated with CopyTrading</a>
                                    </h3>
                                    <p class="uk-text-justify uk-text-meta">The Strategy provider may impose any of the following fee structures (or a combination of any of them) :
                                    </p>
                                    <p class="hidden uk-text-justify uk-text-meta">
                                     <ul  class="nested-list hidden uk-text-meta uk-text-justify">
                                        <li class="uk-margin-bottom">Management Fee is a periodic payment that the follower pays to a strategy provider 	regardless of the strategy performance and is set by a strategy provider as an annual 	percentage (maximum 10%) of the follower’s equity or not.</li>
                                        <li class="uk-margin-bottom">Performance Fee is the percentage (maximum 40%) of the total net profit generated by a 	strategy on the Copy Trading Account and is paid at the first of each month, so a follower 	never pays twice for the same performance and/or underperformance.</li>
                                        <li class="uk-margin-bottom">If you wish to learn more information about the fees and charges associated with copytrading you can access through our website, where you can find an in-depth analysis 	alongside examples of fees calculation.</li>
                                        <li class="uk-margin-bottom">When you place a copy trade, you agree and acknowledge that Lucky Ant Trading is authorised to proceed in deducting from your Account and pay the Strategy Provider any payable fees like management fees, performance fees and/or volume fees.</li>
                                        <li>Any payable fees are visible in the strategy settings under your Account profile.The Client 	should consider such fees before making a decision to invest in a strategy, as such fees 	may affect the performance of your CopyTrading Account.</li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="uk-card-footer uk-clearfix">

                                    <div class="uk-float-right">
                                        <a href="#" onclick="toggleVisibility(this)" class="uk-button uk-button-text uk-text-primary">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded">
                              
                                <div class="uk-card-body toggle-text"  id="review">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">Policy Review</a>
                                    </h3>
                                    <p class="uk-text-justify uk-text-meta">The Company must evaluate copytrading arrangement-related data on an ongoing basis 	in order to identify prevalent challenges arising from varied copytrading strategy 	providers as well as clients and initiate relevant efforts to mitigate regulation-related 	issues and improve the efficacy of such arrangements. 
                                    </p>
                                    <p class="uk-text-justify uk-text-meta">
                                     The Company’s policy is assessed and periodically reviewed, at least on an annual basis, 	or more frequently, should the need arise and any amendments to this policy shall be 	approved by the Company’s Board of Directors. The client shall be notified in writing of 	the nature of the changes deemed appropriate by law, and the revised policy will be 	available on the Company’s Website.
                                    </p>
                                </div>
                       
                            </article>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m">
              
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Copy Trader Content</h5>
                            <ul class="uk-list uk-list-divider uk-list-large widget-latest">
                                <li><a href="{{url('copy-trading-terms-policy')}}#disclaimer">Copy Trading Disclaimer</a></li>
                                <li><a href="{{url('copy-trading-terms-policy')}}#sustain">Suitability to Use CopyTrading Services</a></li>
                                <li><a href="{{url('copy-trading-terms-policy')}}#consent">Consent and Acknowledgment </a></li>
                                <li><a href="{{url('copy-trading-terms-policy')}}#terms">Copytrading Terms</a></li>
                                <li><a href="{{url('copy-trading-terms-policy')}}#fees">Fees and Charges</a></li>
                                <li><a href="{{url('copy-trading-terms-policy')}}#review">Policy Review</a></li>
                            </ul>        
                        </div>
                    </aside>
               
                </div>
            </div>
        </div>
</div>

<script>
    function toggleVisibility(link) {
        event.preventDefault(); 
        const card = link.closest('.uk-card');
        const toggleText = card.querySelector('.toggle-text');
        const paragraphs = toggleText.querySelectorAll('p');
      
        // Toggle the 'hidden' class on all paragraphs starting from the second one
        for (let i = 1; i < paragraphs.length; i++) {
            paragraphs[i].classList.toggle('hidden');
        }

        // Toggle the 'hidden' class on all nested ul elements
        const nestedLists = toggleText.querySelectorAll('ul');
        nestedLists.forEach((nestedList) => {
            nestedList.classList.toggle('hidden');
        });

        const isHidden = paragraphs[1].classList.contains('hidden');
        const newText = isHidden ? 'Read more' : 'Read less';
        link.textContent = newText;

        const tooltipText = isHidden ? 'Show more' : 'Hide content';
        link.title = tooltipText;
    }
</script>
<!-----end of list of articles---------->

<!----------Open an Account----------->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="uk-card uk-card-primary uk-box-shadow-large uk-border-rounded uk-background-cover" style="background-image: url('../img/blockit/in-card-background-03.png');">
                    <div class="uk-card-body">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <h2 class="uk-text-blue">Open Your Account Now!</h2>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 uk-margin-right" href="#">Open Real Account</a>
                                <a class="uk-button uk-button-primary uk-border-rounded uk-margin-top10 " href="#">Open Demo Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------End of Open an Account----->
@endsection