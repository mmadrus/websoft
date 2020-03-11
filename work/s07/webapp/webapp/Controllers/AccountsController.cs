using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;
using webapp.Models;
using webapp.Services;

namespace webapp.Controllers
{
    
    public class AccountsController : ControllerBase
    {
        public AccountsController(AccountReader accountService)
        {
            AccountService = accountService;
        }

        public AccountReader AccountService { get; }

        [Route("api/accounts")]
        [HttpGet]
        public IEnumerable<Account> Get()
        {
            return AccountService.ReadAccounts();
        }
        
        [Route("api/accounts/{account}")]
        [HttpGet]
        public Account Get(int account)
        {
            IEnumerable<Account> list = AccountService.ReadAccounts();

            Account finalAcc = new Account();
            finalAcc.Balance = 0;
            finalAcc.Label = "Does not exist";
            finalAcc.Number = -1;
            finalAcc.Owner = 0;

            foreach (var acc in list)
            {
                if (acc.Number == account)
                {
                    finalAcc = acc;
                    break;
                }
            }

            return finalAcc;
        }

    }
    
    
}