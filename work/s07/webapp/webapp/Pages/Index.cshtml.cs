using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using webapp.Models;
using webapp.Services;

namespace webapp.Pages
{
    public class IndexModel : PageModel
    {
        private readonly ILogger<IndexModel> _logger;
        public AccountReader AccountService;
        
        public IEnumerable<Account> Accounts { get; private set; }

        public IndexModel(
            ILogger<IndexModel> logger,
            AccountReader accountService
        ) {
            _logger = logger;
            AccountService = accountService;
        }

        public void OnGet()
        {
            Accounts = AccountService.ReadAccounts();
        }
    }
}