@extends('master.master')
@section('title', 'Disclosure & Risk Warning')
@section('content')
<div class="uk-section  uk-background-cover"  style="background-image: url('../img/blockit/bg-01.png');">
    <div class="uk-container ">
        <div class="uk-grid">
            <div class="uk-width-1-1" >
                <h1 class="uk-text-superlarge2 uk-padding uk-text-white uk-margin-remove-bottom uk-visible@m">Disclosures and Risk Warning</h1>
                <h1 class="uk-text-superlarge1 uk-text-white uk-margin-remove-bottom uk-hidden@m">Disclosures and Risk Warning </h1>
            </div>
        </div>
    </div>
</div>


<!----Description------------------>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-1@m"  id="intro">
                <h2>Disclosures and Risk Warning</h2>
                <p class="uk-text-justify uk-text-grey uk-text-default">
                    This notice is designed to explain in general terms the nature of and some of the risks particular to our products. We provide this warning to help you take investment decisions on an informed basis. However please note that each trade will carry its own unique risks which cannot be explained in a general note of this nature.                    
                </p>
                <p class="uk-text-justify">
                    Our products carry a high risk of loss and may not be suitable for you. It is very important that you should not engage in trading our products unless you know,understand and are able to manage the features and risks associated with such trading and are also satisfied that trading in our products is suitable for you considering 
                    your circumstances and financial resources. In considering whether to engage in trading our products you should be aware of the following risks.
                </p>
                <p class="uk-text-justify">
                    Lucky Ant Trading Limited does not (will not) provide you with investment advice relating to investments or possible transactions in investments or from making investment recommendations of any kind. We can give you factual market information or information, in relation to a transaction about which you have enquired, as to transaction 
                    procedures, potential risks involved and how those risks may be minimised.
                </p>
            </div>
            {{--
            <div class="uk-width-1-1@m">
                <h3>Leverage</h3>
                <p class="uk-text-justify uk-text-grey uk-text-default">A high degree of “gearing” or “leverage” is associated with trading our products. This stems from the margining system applicable to our products which generally involves a comparatively modest deposit of the overall contract value to open a trade. This can work for you and against you. A small price movement in your favour can result in a high return on the money placed on deposit, however a small price movement against you may result in substantial losses, possibly more than the money placed on deposit.
                </p>
                <p p class="uk-text-justify">
                    Prices can move quickly particularly at times of high market velocity, and if these price movements are unfavourable to your trades, you could quickly build upon significant
                     losses. If you do not maintain enough funds in your account to satisfy your margin requirements, we may close any or all of your open positions, in some circumstances without warning. If we do this your open position may be closed at a loss for which you will be liable.
                </p>
            </div>
         --}}
        </div>
    </div>
</div>
<!----End of Description---------->

<div class="uk-container uk-margin-top">
    <div class="uk-grid-medium" uk-grid>
        <!-- Sidebar -->
        <div class="uk-width-expand@m">
            <div class="uk-card uk-card-default uk-card-body">
                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Content </h5>
                <ul class="uk-list">
                    <li><a href="{{url('disclosure-risk-warning')}}#intro">Introduction</a></li>
                    <li><a href="{{url('disclosure-risk-warning')}}#leverage">Leverage</a></li>
                    <li><a href="{{url('disclosure-risk-warning')}}#margins">Margins & Trading</a></li>
                    <li><a href="{{url('disclosure-risk-warning')}}#volatility">Volatility</a></li>
                    <li><a href="{{url('disclosure-risk-warning')}}#liquidity">Liquidity</a></li>
                    <li><a href="{{url('disclosure-risk-warning')}}#exchange">Dealing Off Exchange</a></li>
                    <li><a href="{{url('disclosure-risk-warning')}}#risk">Risk Associated</a></li>
                    <!-- Add more sections as needed -->
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="uk-width-3-4@m" id="leverage">
            <article>
             
                <h2 id="section2">Leverage</h2>
                <p class="uk-text-justify">A high degree of “gearing” or “leverage” is associated with trading our products. This stems from the margining system applicable to our products 
                    which generally involves a comparatively modest deposit of the overall contract value to open a trade. This can work for you and against you. A small price movement in your 
                    favour can result in a high return on the money placed on deposit, however a small price movement against you may result in substantial losses, possibly more than the money 
                    placed on deposit.
                </p>
                <p class="uk-text-justify">Prices can move quickly particularly at times of high market velocity, and if these price movements are unfavourable to your trades, you could quickly 
                    build upon significant losses. If you do not maintain enough funds in your account to satisfy your margin requirements, we may close any or all of your open positions, in 
                    some circumstances without warning. If we do this your open position may be closed at a loss for which you will be liable.
                </p>
                <!-- Add more sections as needed -->
            </article>
        </div>
    </div>
</div>
<div class="uk-container uk-margin-top" id="margins">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-1-1@m uk-margin-top">
            <h2>Margins and Trading</h2>
        </div>
        <div class="uk-width-1-1@m">
            <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Futures Margin</h1>
                    <p class="uk-text-justify uk-text-meta">This is the amount of money that you must deposit and keep on hand with Lucky Ant Trading Limited when you open a futures position. It is not a down payment, and you do not own the underlying commodity.</p>
                    <p class="uk-text-justify uk-text-meta">When markets are changing rapidly and daily price moves become more volatile, these market conditions may result in higher margin requirements to account for increased risk.</p>        
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Initial Margin</h1>
                    <p class="uk-text-justify uk-text-meta">Initial margin is the percentage of the purchase price of a security that must be covered by cash or collateral when using a margin account. In order for you to transact business in Futures and Options, 
                        you must first post a certain amount of cash, securities or other collateral to satisfy the initial margin requirements. This process allows for magnification of potential profits but also magnifies potential losses.</p>      
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Collateral</h1>
                    <p class="uk-text-justify uk-text-meta">The term collateral refers to an asset that a lender accepts as security for a transaction and acts as a form of protection for the lender by ensuring that should you be unable to maintain your financial obligations, the lender can seize the collateral.
                    </p>      
                </div>
                <div class="uk-width-1-1@m">
                    <h1 id="section1" class="uk-card-title">Margin Trading</h1>
                    <p class="uk-text-justify uk-text-meta">A trade in one of our markets is a trade based on movements in the price of the relevant and/or underlying instrument. Whether you make a profit or a loss will depend on the prices we set and fluctuations in the underlying instrument to which your trade 
                        relates.Trades in our products can only be settled in cash and are legally enforceable.
                    </p>
                    <p class="uk-text-justify uk-text-meta">In certain circumstances your losses on a trade may be unlimited. For instance, if you open a position with us to sell the contract in question (a practice known as “shorting a market”) and the price rises, you will make a loss on that trade and it’ s impossible to know the limit of your potential 
                        losses until you close the trade or your open positions are closed when your margin level reaches the margin close out level. You must ensure that you understand the potential consequences of a particular product or trade and be prepared to accept that degree of risk. You may be called upon to deposit 
                        substantial additional margin, at short notice, to maintain your position. If you do not provide such additional funds within the time required, your position may be closed at a loss and you will be liable for any resulting deficit.You will not acquire the underlying instrument or any rights of delivery 
                        obligations to the underlying instrument.
                    </p>      
                    <p class="uk-text-justify uk-text-meta">Certain markets are quoted and settled in currencies other than your base currency.Trading in these markets carries the additional risk of currency risk, as the exchange rate at the time your positions are closed and converted into your base currency, maybe different to the rate at the time you created 
                        the open position.</p>
                </div>

            </div>
        </div>

        <!-- Section 2 -->
  

           <!-- Section 3 -->


    </div>
</div>

<div class="uk-container uk-margin-top" id="volatility">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-1-1@m">
            <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">
                <div class="uk-width-1-1@m">
                    <h2 id="section1">Volatility</h2>
                    <p class="uk-text-justify uk-text-meta">Whether you make a profit or a loss will depend on the fluctuations in the price of the underlying instrument to which your trade relates. Neither you nor Lucky Ant Trading Limited will have any control over price movements in the underlying instrument. Price movements in underlying instruments can be volatile and unpredictable.</p>
                    <p class="uk-text-justify uk-text-meta">A feature of volatile markets is “gapping” this is where there is a significant change in the price between consecutive quotes. Gapping may occur in fast and falling markets or if price sensitive information is realised prior to market opening. The price at which Lucky Ant Trading Limited executes your orders may be adversely affected if gapping occurs in the relevant market. Stop loss orders will be executed when the price meets or exceeds your specified order price. If gapping occurs the price at which your order is executed may be significantly different from your specified order price.</p>        
                </div>
            </div>
        </div>

    </div>
</div>

<div class="uk-container uk-margin-top" id="liquidity">
    <div class="uk-grid" uk-grid>
      
        <div class="uk-width-1-1@m">
            <div class="uk-card uk-card-default uk-card-body">
                <div class="uk-width-1-1@m">
                    <h2 id="section1">Liquidity</h2>
                    <p class="uk-text-justify uk-text-meta">Under certain trading conditions it may be difficult or impossible to liquidate a Position. This may occur, for example at times of rapid price movement if the price rises or falls in one trading session to such an extent that trading is restricted or suspended.
                    </p>
                    <p class="uk-text-justify uk-text-meta">A decrease in liquidity (a term which describes the availability of buyers and sellers who are prepared to deal in an underlying market) may also adversely impact the price and therefore the ability to quote and trade in a market. If there is a significant reduction or a temporary or permanent cessation in liquidity in an underlying instrument, such events may be deemed an event outside of Lucky Ant Trading Limited’ s control or market disruption event (where applicable) and Lucky Ant Trading Limited may increase the spread between the bid and offer, suspend trading or take any other action considered reasonable under the circumstances. As a result, you may not be able to place trades or to close or open positions in any affected market.
                    </p>        
                </div>
            </div>
        </div>

    </div>
</div>
<div class="uk-container uk-margin-top">
    <div class="uk-grid" uk-grid>

        <!-- Section 1 -->
        <div class="uk-width-1-1@m" id="exchange"> 
            <div class="uk-card uk-card-default uk-card-body uk-margin-top">
                <h2 id="section1">Dealing Off Exchange</h2>
                <p class="uk-text-justify uk-text-meta">Transactions with Lucky Ant Trading Limited are not transacted on a recognised or designated investment exchange and, accordingly, they may expose you to greater risks than exchange transactions. The Transactions structure and rules
                    will be established solely by Lucky Ant Trading Limited in accordance with MSB and related regulation. For example,if you wish to close the position earlier than the time at which it would otherwise automatically expire, you will have 
                    to close it at Lucky Ant Trading Limited’ s quotation which may reflect a premium or discount to the Underlying Market. You will have to close any position with the same provider with whom it was originally entered into.</p>
            </div>
        </div>

    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-padding">
        <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
            <div class="uk-width-1-1@m" id="risk">
                <h2>Risks Associated with Financial Instruments</h2>
            </div>
            <div class="uk-width-1-1@m">
               <h3> <i class="fas fa-check-circle fa-sm"></i> Shares</h3>
                  <p  class="uk-text-justify uk-text-meta">A share represents a shareholder’ s rights in a company. Shares may be issued in bearer or registered form or may not be documented, other than on a private register.
                  </p>
                <h4>Dealing in shares may involve the following specific risks :</h4>
                  <ol style=" list-style-type: lower-alpha">
                    <li class="uk-text-justify uk-text-meta uk-margin-bottom"> Company risk: a share purchaser does not lend funds to the company, but makes a capital contribution and, as such takes an ownership interest in the corporation. It is difficult to forecast the precise yield on such an investment.An extreme case would be if the company went bankrupt, thereby wiping out the total sums invested.</li>
                    <li  class="uk-text-justify uk-text-meta uk-margin-bottom"> Price risk: share prices may undergo unforeseeable price fluctuations causing risks of loss. Price increases and decreases in short-medium and long-term alternate without it being possible to determine the duration of those cycles.General market must be distinguished from the specific risk attached to the company itself. Both risks, jointly or in aggregate, influence evolution of share prices.</li>
                    <li  class="uk-text-justify uk-text-meta">Dividend risk: the dividend per share mainly depends on the issuing company’ s earnings and on its dividend policy. In case of profits or losses, dividend payments may be reduced or not made at all.
                    </li>
                </ol>
            </div>
            <div class="uk-width-1-1@m">
                <h3> <i class="fas fa-check-circle fa-sm"></i> Fixed income</h3>
                   <p  class="uk-text-justify uk-text-meta">Fixed Income Securities are negotiable debt instruments issued in bearer or registered form by an issuer to creditors whose duration, terms and interest payments may vary depending on their terms. The purchaser of Fixed Income Securities (the creditor) has a claim against the issuer (the debtor).
                   </p>
                   <p  class="uk-text-justify uk-text-meta">Fixed Income Securities are subject to credit risk. Credit risk is the possibility that an issuer will fail to make timely payments of interest or principal. Some issuers may not make payments on debt Securities causing a loss. Or an issuer may suffer adverse changes in its financial condition that could lower the credit quality of a security, leading to greater volatility in the price of the security. A change in the quality rating of a bond or other security can also affect the security’ s liquidity and make it more difficult to sell. The lower quality fixed income Securities in which the Client may invest are more susceptible to these problems than higher quality obligations.</p>
                   <p class="uk-text-justify uk-text-meta">Fixed Income Securities are subject to prepayment risk. The issuers of Fixed Income Securities held in the Customer’ s Portfolio may not be able to prepay principal due on the Securities, particularly during periods of declining interest rates. Renaissance, if so, requested by the Client, may not be able to reinvest that principal at attractive rates, reducing the income. On the other hand, rising interest rates may cause prepayments to occur at slower than expected rates. This effectively lengthens the maturities of the affected Securities, making them more sensitive to interest rate changes and the value of Securities held more volatile.
                   </p>
                   <p class="uk-text-justify uk-text-meta">The Client acknowledges that lower rated debt Securities are subject to additional risks. Lower rated debt Securities, including securities commonly referred to as “junk bonds”, are very risky because the issuers may fail to make payments of interest and principal. Part of the reason for this high risk is that, in the event of a default or bankruptcy, holders of lower rated debt securities generally will not receive payments until the holders of all other debt have been paid. In addition, the market for lower rated debt securities has in the past been more volatile than the markets for other securities. Lower rated debt securities are also often less liquid than higher rated debt securities.</p>
                   <p class="uk-text-justify uk-text-meta">The Client acknowledges that sovereign debt securities are subject to significant risk that under some political, diplomatic, social or economic circumstances may lead some developing countries that issue lower-quality debt securities to be unable or unwilling to make principal or interest repayments as they become due. Additional risks may be associated with certain types of bonds, for example, floating rate notes, reverse floating rate notes, zero bonds, foreign currency bonds, convertible bonds, indexed bonds, and subordinated bonds. For such bonds, you should make inquiries about the risks referred to in the issuance prospectus and not to purchase such securities before being certain that all risks are fully understood. In the case of subordinated bonds, you should enquire about the ranking of the debenture compared to the issuer’ s other debentures. Indeed, if the issuer becomes bankrupt, those bonds will only be redeemed after payment of all higher ranked creditors. In the case of reverse convertible notes, there is a risk that you will not be entirely reimbursed, but will receive only an amount equivalent to the underlying securities at maturity.</p>
            </div>
            <div class="uk-width-1-1@m">
                <h3> <i class="fas fa-check-circle fa-sm"></i> Futures</h3>
                   <p class="uk-text-justify uk-text-meta">Transactions in futures involve the obligation to make, or to take, delivery of the underlying asset of the contract at a future date, or in some cases to settle the position with cash. They carry a high degree of risk. The ‘gearing’ or ‘leverage’ often obtainable in futures trading means that a small deposit or down payment can lead to large losses as well as gains. It also means that a relatively small movement can lead to a proportionately much larger movement in the value of your investment, and this can work against you as well as for you. Futures transactions have a contingent liability, and you should be aware of the implications of this, in particular the margining requirements, which are set out below.
                   </p>
            </div>
            <div class="uk-width-1-1@m">
                <h3> <i class="fas fa-check-circle fa-sm"></i> Options</h3>
                   <p class="uk-text-justify uk-text-meta">There are many different types of options with different characteristics subject to the following conditions.
                   </p>
                   <ol style=" list-style-type: lower-alpha">
                    <li class="uk-text-justify uk-text-meta uk-margin-bottom"> Buying options: Buying options usually involves less risk than selling options because, if the price of the underlying asset moves against you, you  can simply 	allow the option to lapse. The maximum loss is limited to the premium, plus any 	commission or other transaction charges. However, if you buy a call option on a futures 	contract and you later exercise the option, you will acquire the future. This will expose 	you to the risks described under ‘Futures’.
                    </li>
                    <li class="uk-text-justify uk-text-meta uk-margin-bottom"> Writing options: If you write an option, the risk involved is considerably greater than 	buying options. You may be liable for margin to maintain your position and a loss may be 	sustained well in excess of the premium received. By writing an option, you accept a legal 	obligation to purchase or sell the underlying asset if the option is exercised against you, 	however far the market price has moved away from the exercise price. If you already own 	the underlying asset which you have contracted to sell (when the options will be known 	as ‘covered call options’ ) the risk is reduced. If you do not own the underlying asset 	( ‘uncovered call options’ ) the risk can be unlimited. Only experienced persons should 	contemplate writing uncovered options, and then only after securing full details of the 	applicable conditions and potential risk exposure.
                    </li>
                    <li class="uk-text-justify uk-text-meta">Traditional options: Traditional options may involve greater risk than other options. 	Two-way prices are not usually quoted and there is no Exchange market on which to 	close out an open position or to affect an equal and opposite transaction to reverse an 	open position. It may be difficult to assess its value or for the seller of such an option to 	manage his exposure to risk. Certain options markets operate on a margin-ed basis, 	under which buyers do not pay the full premium on their option at the time they 	purchase it. In this situation, you may subsequently be called upon to pay margin on the 	option up to the level of your premium. If you fail to do so as required, your position may 	be closed or liquidated in the same way as a futures position.
                    </li>
                </ol>
            </div>
            <div class="uk-width-1-1@m">
                <h3> <i class="fas fa-check-circle fa-sm"></i> Contracts for differences</h3>
                   <p class="uk-text-justify uk-text-meta">Futures and options contracts can also be referred to as contracts for differences. These can be options and futures on any index, as well as currency and interest rate swaps. 	However, unlike other futures and options, these contracts can only be settled in cash. 	Investing in a contract for differences carries the same risks as investing in a future or an 	option and you should be aware of these as set out above. Transactions in contracts for 	differences may also have a contingent liability and you should be aware of the implications of detailed below.
                   </p>
            </div>
        </div>
    </div>
</div>



@endsection