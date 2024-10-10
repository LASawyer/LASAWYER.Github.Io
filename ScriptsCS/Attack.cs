using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Attack : MonoBehaviour
{
    public Transform Guntip;
    public GameObject Bullet;
    private bool m_FacingRight = true;

    public Character2DController move;

    private void Update()
    {
        if (Input.GetButtonDown("Fire1"))
        {
            StartCoroutine("Attacks");
        }
    }
    
    private IEnumerator Attacks()
    {
        GameObject currentBullet = Instantiate(Bullet, Guntip.position, Guntip.rotation);

        currentBullet.transform.right = Guntip.transform.right * move.GetShootScale();

        yield return null;
    }
    private void Flip()
    {
        m_FacingRight = !m_FacingRight;

        transform.Rotate (0f, 190f, 0f);
    }
}
