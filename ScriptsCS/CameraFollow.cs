using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CameraFollow : MonoBehaviour
{
    [SerializeField]
    private Transform player;

    private void LateUpdate(){
        transform.position = Vector3.Lerp(transform.position, player.position, 0.8f);

     
    }
    void Update(){
        if(Input.GetButtonDown("Jump"))
        transform.position = Vector3.Lerp(transform.position, player.position, 100f);
    }
}